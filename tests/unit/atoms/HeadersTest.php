<?php

use PHPUnit\Framework\TestCase;
use App\View\Components\Atoms\Headers;

class HeadersTest extends TestCase
{
    /**
     * Test if the component renders correctly with default values.
     *
     * @return void
     */
    public function testComponentRendersWithDefaultValues()
    {
        $component = new Headers();

        $view = $component->render();

        $this->assertStringContainsString('<h1', $view);
        $this->assertStringContainsString('class="style-1"', $view);
    }

    /**
     * Test if the component renders with specified tag and styles.
     *
     * @return void
     */
    public function testComponentRendersWithSpecifiedTagAndStyles()
    {
        $component = new Headers(3, 2);

        $view = $component->render();

        $this->assertStringContainsString('<h3', $view);
        $this->assertStringContainsString('class="style-2"', $view);
    }
}
