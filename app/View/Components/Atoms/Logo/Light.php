<?php

namespace App\View\Components\Atoms\Logo;

use Illuminate\View\Component;

class Light extends Component
{
    public string $customText;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->customText = 'sdf';
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.atoms.logo.light');
    }
}
