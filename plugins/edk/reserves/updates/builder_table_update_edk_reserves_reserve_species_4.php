<?php namespace Edk\Reserves\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEdkReservesReserveSpecies4 extends Migration
{
    public function up()
    {
        Schema::table('edk_reserves_reserve_species', function($table)
        {
            $table->integer('reserve_id')->unsigned()->change();
            $table->integer('species_id')->unsigned()->change();
        });
    }
    
    public function down()
    {
        Schema::table('edk_reserves_reserve_species', function($table)
        {
            $table->integer('reserve_id')->unsigned(false)->change();
            $table->integer('species_id')->unsigned(false)->change();
        });
    }
}
