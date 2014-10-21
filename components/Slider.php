<?php namespace Radiantweb\HomeSlice\Components;

use Cms\Classes\ComponentBase;
use Radiantweb\HomeSlice\Models\Slider as SliderModel;

class Slider extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'Slider Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [
            'slider' => [
                'title' => 'Slider',
                'description' => 'Chose a slider',
                'type'=>'dropdown',
                'default' => ''
            ]
        ];
    }
    
    public function getSliderOptions()
    {
        return SliderModel::lists('title', 'id');
    }
    
    public function onRun()
    {
        $this->slides = $this->page['slides'] = SliderModel::where('id',$this->property('slider'))->first()->slides;
    }

}