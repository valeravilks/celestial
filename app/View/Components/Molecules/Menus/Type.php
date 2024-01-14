<?php

namespace App\View\Components\Molecules\Menus;

use Illuminate\View\Component;

/**
 * link https://github.com/Log1x/navi
 */

class Type extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {

        add_action('after_setup_theme', [$this, 'registerMenu']);
//        var_dump('asdasdasd');
    }

    public function registerMenu()
    {
        register_nav_menu('primary', 'Основное меню');
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.molecules.menus.type');
    }
}
