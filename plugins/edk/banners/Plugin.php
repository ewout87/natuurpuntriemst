<?php namespace Edk\Banners;

use System\Classes\PluginBase;
use Event;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    }

    public function registerSettings()
    {
    }

    public function boot()
    {

            // Extend all backend form usage
            Event::listen('backend.form.extendFields', function($widget) {

            // Only for the CMS Index controller
            if (!$widget->getController() instanceof \Cms\Controllers\Index) {
                return;
            }

            // Only for the Page model
            if (!$widget->model instanceof \Cms\Classes\Page) {
                return;
            }

            // Add custom fields...
            $widget->addTabFields([
                'viewBag[banner_image]' => [
                    'label'   => 'Banner',
                    'type'    => 'mediafinder',
                    'tab'     => 'cms::lang.editor.settings',
                    'span'    => 'left'
                ],
            ]);
        });
    }
}
