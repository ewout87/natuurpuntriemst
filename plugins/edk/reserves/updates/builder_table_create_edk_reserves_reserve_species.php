<?php namespace Edk\Reserves\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateEdkReservesReserveSpecies extends Migration
{
    public function up()
    {
        Schema::create('edk_reserves_reserve_species', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('edk_reserves_reserve_species');
    }
}
