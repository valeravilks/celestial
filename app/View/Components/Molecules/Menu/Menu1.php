<?php

namespace App\View\Components\Molecules\Menu;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Log1x\Navi\Navi;

class Menu1 extends Component
{
    public array $menuItems = [];
    /**
     * Create a new component instance.
     */
    public function __construct(string $name = '')
    {
        $menu = Navi::make()->build($name);

        if ($menu->isNotEmpty()) {
            $this->menuItems = $menu->toArray();
        }
    }

    public function isMenu(): bool
    {
        return count($this->menuItems) !== 0;
    }


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.molecules.menu.menu1');
    }
}
