<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TextRender extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public ?string $text = null,
        public ?string $label = null,
        public ?string $optional = null
    ) {
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Closure|\Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.text-render');
    }
}
