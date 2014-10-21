<?php namespace Radiantweb\HomeSlice\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateSlidersTable extends Migration
{

    public function up()
    {
        Schema::create('radiantweb_homeslice_sliders', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('title')->nullable();
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('radiantweb_homeslice_sliders');
    }

}
