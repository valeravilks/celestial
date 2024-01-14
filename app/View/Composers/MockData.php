<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;
use Illuminate\Support\Facades\Config;

class MockData extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var string[]
     */
    protected static $views = [
        '*',
    ];

    /**
     * Data to be passed to view before rendering, but after merging.
     *
     * @return array
     */
    public function override()
    {
        return [
            'mockHeaders' => $this->mockHeaders(),
        ];
    }

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            //
        ];
    }

    private function mockHeaders()
    {
        return Config::get('mockText.headers', []);
    }
}
