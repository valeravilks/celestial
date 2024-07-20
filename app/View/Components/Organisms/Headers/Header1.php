<?php

namespace App\View\Components\Organisms\Headers;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Header1 extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $menuSlug = ''
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.organisms.headers.header1');
    }
}
