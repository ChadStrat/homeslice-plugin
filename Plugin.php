<?php namespace Radiantweb\HomeSlice;

use Backend;
use System\Classes\PluginBase;

/**
 * HomeSlice Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'HomeSlice',
            'description' => 'Stupid Simple Sliders',
            'author'      => 'Radiantweb',
            'icon'        => 'icon-picture-o'
        ];
    }
    
    public function registerComponents()
    {
        return [
            'Radiantweb\Homeslice\Components\Slider'  => 'Slider',
        ];
    }
    
    public function registerFormWidgets()
    {
        return [
            'Radiantweb\Homeslice\Formwidgets\Slideselect' => [
                'label' => 'Select Slides',
                'alias' => 'slideselect'
            ],
        ];
    }
    
    public function registerNavigation()
    {
        return [
            'homeslice' => [
                'label'       => 'HomeSlice',
                'url'         => Backend::url('radiantweb/homeslice/sliders'),
                'icon'        => 'icon-picture-o',
                'permissions' => ['homeslice:*'],
                'order'       => 500,  

            ]
        ];
    }

}
