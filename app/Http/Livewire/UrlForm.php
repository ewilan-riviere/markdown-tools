<?php

namespace App\Http\Livewire;

use App\Models\Scraper;
use App\Services\DomService;
use Livewire\Component;
use Livewire\WithPagination;

class UrlForm extends Component
{
    use WithPagination;

    public ?string $url = 'https://la1ere.francetvinfo.fr/guadeloupe/journee-mondiale-de-lutte-contre-la-transphobie-et-l-homophobie-des-actes-anti-lgbt-en-hausse-1284644.html';
    public ?string $ip = null;
    public ?Scraper $scraper = null;

    protected $rules = [
        'url' => 'required',
    ];

    public function storeScraper()
    {
        $this->validate();
        $this->ip = request()->ip();

        $service = DomService::create($this->url);
        $service->parse()
            ->convert()
        ;
        dump($service);

        $this->scraper = Scraper::create([
            'url' => $this->url,
            'ip' => $this->ip,
            'markdown' => $service->markdown,
            'html' => $service->html,
        ]);
        $scraper = $this->scraper;

        $this->reset();
        session()->flash('message', 'Article scraped successfully.');

        return redirect()->to(route('scraper', ['id' => $scraper->id, 'url' => base64_encode($scraper->url)]));
    }

    public function render()
    {
        return view('livewire.url-form', ['scraper' => $this->scraper]);
    }
}
