<?php namespace EwoutDuyck\Map\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateEwoutduyckMapCategories extends Migration
{
    public function up()
    {
        Schema::create('ewoutduyck_map_categories', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name', 191)->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('ewoutduyck_map_categories');
    }
}
