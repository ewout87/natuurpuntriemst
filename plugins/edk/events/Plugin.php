<?php namespace Edk\Events;

use System\Classes\PluginBase;
use jorgeandrade\events\models\Event;
use Carbon\Carbon;

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
        Event::extend(function($model) {
        $model->addDynamicMethod('scopeAfterToday', function($query) {
            	$today = Carbon::now();

                return $query->where('start_at', '>=', $today);
            });
        });

        Event::extend(function($model) {
        $model->addDynamicMethod('scopeBeforeToday', function($query) {
            	$today = Carbon::now();

                return $query->where('start_at', '<', $today);
            });
        });
    }
}
