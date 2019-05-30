<?php namespace EwoutDuyck\Map\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateEwoutduyckMapLocations extends Migration
{
    public function up()
    {
        Schema::create('ewoutduyck_map_locations', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name', 191)->nullable();
            $table->integer('category_id')->nullable()->unsigned();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('ewoutduyck_map_locations');
    }
}