<?php

namespace App\Options;

use App\Fields\Partials\Organisms\Footers\Footer1;
use Log1x\AcfComposer\Builder;
use Log1x\AcfComposer\Options as Field;

class SiteSettings extends Field
{
    /**
     * The option page menu name.
     *
     * @var string
     */
    public $name = 'Site Settings';

    /**
     * The option page document title.
     *
     * @var string
     */
    public $title = 'Site Settings | Options';

    /**
     * The option page field group.
     */
    public function fields(): array
    {
        $siteSettings = Builder::make('site_settings');

        $siteSettings
            ->addPartial(Footer1::class);

        return $siteSettings->build();
    }
}
