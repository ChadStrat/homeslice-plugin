<?php namespace Radiantweb\HomeSlice\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateSlidesTable extends Migration
{

    public function up()
    {
        Schema::create('radiantweb_homeslice_slides', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('heading')->nullable();
            $table->text('content')->nullable();
            $table->integer('slider_id')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('radiantweb_homeslice_slides');
    }

}
