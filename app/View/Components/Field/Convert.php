<?php

namespace App\View\Components\Field;

use Illuminate\View\Component;

class Convert extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public ?string $name = null,
        public ?string $value = null,
        public ?string $label = null,
        public ?string $placeholder = null,
        public ?string $hint = null,
        public ?string $helper = null,
        public ?string $error = null,
    ) {
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Closure|\Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.field.convert');
    }
}
