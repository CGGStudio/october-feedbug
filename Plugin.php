<?php namespace Mrmlnc\Feedbug;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
            'name'        => 'mrmlnc.feedbug::lang.plugin.name',
            'description' => 'mrmlnc.feedbug::lang.plugin.description',
            'author'      => 'Denis Malinochkin',
            'icon'        => 'icon-bug'
        ];
    }

    public function registerComponents()
    {
        return [
            'Mrmlnc\Feedbug\Components\Feed' => 'feedReport'
        ];
    }

}
