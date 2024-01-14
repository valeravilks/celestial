<?php

namespace App\View\Components\Atoms\DocsCommets;

use Illuminate\View\Component;
use ReflectionClass;
use ReflectionProperty;

/**
 * Class for get PHPDoc for component
 *
 * Usage:
 * <x-atoms.docs-commets.index :class="App\View\Components\Test::class"/>
 *
 * This prints out the comments for the class as well as its values
 *
 * TODO: Clear $classDocs
 * TODO: Get only public properties and function (ignore render fn)s
 */

class Index extends Component
{
    public $classDocs;
    public $variablesDocs;
    private $class;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($class)
    {
        // TODO: Check by type class
        $this->class = $class;
        $reflectionClass = new ReflectionClass($this->class);
        $this->classDocs = $reflectionClass->getDocComment();
        $this->variablesDocs = $reflectionClass->getProperties(ReflectionProperty::IS_PUBLIC);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.atoms.docs-commets.index');
    }
}
