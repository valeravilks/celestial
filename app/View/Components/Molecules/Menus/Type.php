<?php

namespace App\View\Components\Molecules\Menus;

use Illuminate\View\Component;
use Log1x\Navi\Navi;

/**
 * link https://github.com/Log1x/navi
 */

class Type extends Component
{
    public array $menu = [];
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {

        $navigation = (new Navi())->build('primary_navigation');

        if ($navigation->isEmpty()) {
            return;
        }

        $this->menu = $navigation->toArray();
//        var_dump($menu);
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
