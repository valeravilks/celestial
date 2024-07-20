<?php

namespace App\View\Components\Organisms\Footers;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Footer1 extends Component
{
    public string $content = '';
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->content = get_field('content', 'options') ?? '';
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.organisms.footers.footer1');
    }
}
