<?php namespace Radiantweb\HomeSlice\Models;

use Model;

/**
 * Slide Model
 */
class Slide extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'radiantweb_homeslice_slides';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = ['heading','content'];
    

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = ['slider' => ['Radiantweb\Homeslice\Models\Slider','foreignKey' => 'slider_id'],];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = ['slide_image' => ['System\Models\File']];
    public $attachMany = [];

}