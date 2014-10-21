<?php namespace Radiantweb\HomeSlice\Models;

use Model;

/**
 * Slider Model
 */
class Slider extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'radiantweb_homeslice_sliders';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = ['*'];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [
        'slides' => ['Radiantweb\Homeslice\Models\Slide'],
    ];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

}