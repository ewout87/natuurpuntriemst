<?php namespace Edk\Reserves\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteEdkReservesReserveSpecies extends Migration
{
    public function up()
    {
        Schema::dropIfExists('edk_reserves_reserve_species');
    }
    
    public function down()
    {
        Schema::create('edk_reserves_reserve_species', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('reserve_id')->unsigned();
            $table->integer('species_id')->unsigned();
            $table->primary(['reserve_id','species_id']);
        });
    }
}
