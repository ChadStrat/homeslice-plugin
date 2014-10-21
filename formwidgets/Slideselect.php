<?php namespace Radiantweb\HomeSlice\FormWidgets;

use Backend\Classes\FormWidgetBase;

/**
 * Price
 * Renders a code editor field.
 *
 * @package radiantweb\backend
 * @author ChadStrat
 */
class Slideselect extends FormWidgetBase
{
    /**
     * {@inheritDoc}
     */
    public $defaultAlias = 'slideselect';


    /**
     * {@inheritDoc}
     */
    public function init()
    {

    }

    /**
     * {@inheritDoc}
     */
    public function render()
    {
        $this->prepareVars();
        return $this->makePartial('slideselect');
    }

    /**
     * Prepares the list data
     */
    public function prepareVars()
    {   
        $this->vars['value'] = $this->model->{$this->columnName} ? $this->model->{$this->columnName} : 0;
        $this->vars['name'] = $this->formField->getName();
    }

    /**
     * {@inheritDoc}
     */
    public function loadAssets()
    {

    }
    
    /** 
    * Process the postback data for this widget. 
    * @param $value The existing value for this widget. 
    * @return string The new value for this widget. 
    */ 

    public function getSaveData($value) 
    { 
        if(!$this->model)
            $this->model->save();
        
        return json_encode($value); 
    } 


}