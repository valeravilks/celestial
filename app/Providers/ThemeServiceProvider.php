<?php

namespace App\Providers;

use Roots\Acorn\Sage\SageServiceProvider;

class ThemeServiceProvider extends SageServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        parent::register();
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        add_filter('render_block', function ($block_content, $block) {
            if ($block['blockName'] === 'radicle/modal') {
                return "hello2!";
            }
//                return view('blocks.modal', [
//                    'block' => $block,
//                    'blockContent' => $block_content,
//                    'buttonText' => $block['attrs']['buttonText'] ?? null,
//                    'heading' => $block['attrs']['heading'] ?? null,
//                ]);
            return $block_content;
        }, 10, 2);
    }
}
