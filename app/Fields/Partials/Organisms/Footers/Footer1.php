<?php

namespace App\Fields\Partials\Organisms\Footers;

use Log1x\AcfComposer\Builder;
use Log1x\AcfComposer\Partial;

class Footer1 extends Partial
{
    /**
     * The partial field group.
     */
    public function fields(): Builder
    {
        $footer1 = Builder::make('footer1');

        $footer1
            ->addTab('Footer')
                ->addText('content')
            ->addTab('asd');

        return $footer1;
    }
}
