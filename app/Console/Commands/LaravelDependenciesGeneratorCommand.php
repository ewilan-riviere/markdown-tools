<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\File;
use Symfony\Component\Process\Process;

class LaravelDependenciesGeneratorCommand extends Command
{
    public $signature = 'ldg:vite';

    public $description = 'My command';

    public function handle(): int
    {
        $this->alert('LDG Vite');
        $this->info($this->description);

        // $this->deleteFiles();
        // $this->viewConfig();
        // $this->requireComposerPackages(
        //     'inertiajs/inertia-laravel:^0.5.4',
        //     'laravel/sanctum:^2.8',
        //     'tightenco/ziggy:^1.0'
        // );
        // $this->updateNodePackages(function ($packages) {
        //     return [
        //         '@types/node',
        //         'dotenv',
        //         'npm-run-all',
        //         'typescript',
        //         'vite',
        //     ] + $packages;
        // });
        $this->removeNodePackages([
            'axios',
            'laravel-mix',
            'lodash',
            'postcss',
        ]);

        $this->comment('All done');

        return self::SUCCESS;
    }

    protected function requireComposerPackages($packages)
    {
        $composer = $this->option('composer');

        if ('global' !== $composer) {
            $command = ['php', $composer, 'require'];
        }

        $command = array_merge(
            $command ?? ['composer', 'require'],
            is_array($packages) ? $packages : func_get_args()
        );

        (new Process($command, base_path(), ['COMPOSER_MEMORY_LIMIT' => '-1']))
            ->setTimeout(null)
            ->run(function ($type, $output) {
                $this->output->write($output);
            })
        ;
    }

    protected static function updateNodePackages(callable $callback, $dev = true)
    {
        if (! file_exists(base_path('package.json'))) {
            return;
        }

        $configurationKey = $dev ? 'devDependencies' : 'dependencies';

        $packages = json_decode(file_get_contents(base_path('package.json')), true);

        $packages[$configurationKey] = $callback(
            array_key_exists($configurationKey, $packages) ? $packages[$configurationKey] : [],
            $configurationKey
        );

        ksort($packages[$configurationKey]);

        file_put_contents(
            base_path('package.json'),
            json_encode($packages, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT).PHP_EOL
        );
    }

    protected static function removeNodePackages(array $packages)
    {
        if (! file_exists(base_path('package.json'))) {
            return;
        }

        // $configurationKey = $dev ? 'devDependencies' : 'dependencies';

        $packages = json_decode(file_get_contents(base_path('package.json')), true);

        // $packages[$configurationKey] = $callback(
        //     array_key_exists($configurationKey, $packages) ? $packages[$configurationKey] : [],
        //     $configurationKey
        // );

        // ksort($packages[$configurationKey]);
        dump($packages);

        // file_put_contents(
        //     base_path('package.json'),
        //     json_encode($packages, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT).PHP_EOL
        // );
    }

    protected static function flushNodeModules()
    {
        tap(new Filesystem(), function ($files) {
            $files->deleteDirectory(base_path('node_modules'));

            $files->delete(base_path('yarn.lock'));
            $files->delete(base_path('package-lock.json'));
        });
    }

    private function deleteFiles()
    {
        $file_to_delete = [
            resource_path('views/welcome.blade.php'),
            base_path('webpack.mix.js'),
        ];

        foreach ($file_to_delete as $file_name) {
            if (File::exists($file_name)) {
                File::delete($file_name);
            }
        }
    }

    private function viewConfig()
    {
        $view_config = config_path('view.php');
        str_replace("resource_path('views')", 'resource_path()', $view_config);
    }
}
