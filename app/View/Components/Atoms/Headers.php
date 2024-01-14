<?php

namespace App\View\Components\Atoms;

use Illuminate\View\Component;

/**
 * Heading component h1 - h6.
 */

class Headers extends Component
{
    /**
     * Heading tag
     *
     * Can be from 1 to 6. Default 1. The tag only affects semantics and does not affect display
     */

    public $tag;

    /**
     * Heading styles
     *
     * Header style type. You can have an h2 header with 3 header styles.
     * Default 1 or tag number
     */

    public $styles;


    /**
     * Create a new component instance.
     *
     * TODO: Create a check that the h tag can only be from 1 to 6
     *
     * @return void
     */
    public function __construct($tag = null, $styles = null)
    {
        $this->tag = $tag ?? 1;
        $this->styles = $styles ?? $this->tag;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.atoms.headers.style-' . $this->styles);
    }
}
