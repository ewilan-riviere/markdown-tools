<?php

namespace App\View\Components;

use App\Models\Scraper;
use Illuminate\View\Component;

class MetadataBlock extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public Scraper $scraper
    ) {
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Closure|\Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        $data = [];

        $data['url'] = [
            'label' => 'URL',
            'value' => $this->scraper->url,
        ];
        $data['is_valid'] = [
            'label' => 'Valid HTML',
            'value' => json_encode($this->scraper->is_valid),
        ];

        return view('components.metadata-block', compact('data'));
    }
}
