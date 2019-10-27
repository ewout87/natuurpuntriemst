<?php namespace Edk\Reserves\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateEdkReservesSpecies extends Migration
{
    public function up()
    {
        Schema::create('edk_reserves_species', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 191)->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('edk_reserves_species');
    }
}
