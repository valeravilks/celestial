<?php

namespace App\Options;

use Log1x\AcfComposer\Options as Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class MainOptions extends Field
{
    /**
     * The option page menu name.
     *
     * @var string
     */
    public $name = 'Main Options';

    /**
     * The option page document title.
     *
     * @var string
     */
    public $title = 'Main Options | Options';

    /**
     * The option page field group.
     *
     * @return array
     */
    public function fields()
    {
        $mainOptions = new FieldsBuilder('main_options');

        $mainOptions
            ->addRepeater('items')
                ->addText('item')
            ->endRepeater();

        return $mainOptions->build();
    }
}
