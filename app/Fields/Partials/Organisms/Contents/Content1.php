<?php

namespace App\Fields\Partials\Organisms\Contents;

use Log1x\AcfComposer\Builder;
use Log1x\AcfComposer\Partial;

class Content1 extends Partial
{
    /**
     * The partial field group.
     */
    public function fields(): Builder
    {
        $content1 = Builder::make('content1');

        $content1
            ->addImage('image')
            ->addText('title')
            ->addWysiwyg('content');

        return $content1;
    }
}
