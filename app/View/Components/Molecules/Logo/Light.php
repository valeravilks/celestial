<?php

namespace App\View\Components\Molecules\Logo;

use Illuminate\View\Component;

class Light extends Component
{
    public string $text;
    public string $url;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->text = get_bloginfo('name');
        $this->url = get_site_url();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.molecules.logo.light');
    }
}
