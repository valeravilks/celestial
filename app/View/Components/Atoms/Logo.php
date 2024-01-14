<?php

namespace App\View\Components\Atoms;

use Illuminate\View\Component;

/**
 * The Light component represents a light version of a logo.
 *
 * This component is used to display a light version of a logo on a website.
 *
 * Example usage:
 *
 * ```php
 * <x-light-logo customText="Your Custom Text" />
 * ```
 *
 * @package App\View\Components\Atoms\Logo
 */

class Logo extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.atoms.logo');
    }
}
