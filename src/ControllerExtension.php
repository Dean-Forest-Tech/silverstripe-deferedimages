<?php

namespace DFT\SilverStripe\DeferedImages;

use SilverStripe\Core\Extension;
use SilverStripe\View\Requirements;
use SilverStripe\Core\Config\Config;

class ControllerExtension extends Extension
{
    /**
     * should the javascript be added via requirements
     *
     * @config
     * @var boolean
     */
    private static $load_script = true;

    public function onBeforeInit()
    {
        if (Config::inst()->get(static::class, 'load_script')) {
            Requirements::javascriptTemplate(
                'i-lateral/silverstripe-deferedimages:client/dist/js/deferedimages.min.js',
                []
            );
        }
    }
}