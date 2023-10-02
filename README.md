# **Markdown Tools** <!-- omit in toc -->

[![php][php-version-src]][php-version-href]
[![laravel][laravel-version-src]][laravel-version-href]
[![node][node-version-src]][node-version-href]
[![license][license-src]][license-href]

Demo: [**markdown-tools.git-projects.xyz**](https://markdown-tools.git-projects.xyz)

## **Setup**

Download dependencies

```bash
composer i
pnpm i
```

```bash
cp .env.example .env
php artisan key:generate
php artisan storage:link
```

## License

[MIT](LICENSE)

[laravel-version-src]: https://img.shields.io/badge/dynamic/json?label=Laravel&query=require[%27laravel/framework%27]&url=https://raw.githubusercontent.com/ewilan-riviere/markdown-interpreter/main/composer.json&color=777bb4&logo=laravel&logoColor=ffffff&labelColor=18181b
[laravel-version-href]: https://laravel.com/
[php-version-src]: https://img.shields.io/badge/dynamic/json?label=PHP&query=require[%27php%27]&url=https://raw.githubusercontent.com/ewilan-riviere/markdown-interpreter/main/composer.json&color=777bb4&logo=&logoColor=ffffff&labelColor=18181b
[php-version-href]: https://www.php.net/
[node-version-src]: https://img.shields.io/badge/dynamic/json?label=Node.js&query=engines[%27node%27]&url=https://raw.githubusercontent.com/ewilan-riviere/markdown-interpreter/main/package.json&color=777bb4&labelColor=18181b
[node-version-href]: https://nodejs.org/en
[license-src]: https://img.shields.io/github/license/ewilan-riviere/markdown-interpreter.svg?style=flat&colorA=18181B&colorB=777bb4
[license-href]: https://github.com/ewilan-riviere/markdown-interpreter/blob/main/LICENSE
