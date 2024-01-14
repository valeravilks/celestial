<?php

namespace App\View\Components\Atoms;

use Illuminate\View\Component;

/**
 * Example Atom Component
 */

class Example extends Component
{
    /**
     * Required element is the name of this component. Use this title format:
     *
     * a - denotes an atom
     * example - class name with small letters.
     *
     * If your atom is in some subfolder, indicate the path using the '-' sign.
     * For example: 'a-headers-title', this means that this file is located in
     * the App\View\Components\Atoms\Headers\Title folder
     */

    public string $classComponent = 'a-example';

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
        return view('components.atoms.example');
    }
}
