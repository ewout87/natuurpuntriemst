<?php namespace Edk\Reserves\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEdkReservesReserveSpecies extends Migration
{
    public function up()
    {
        Schema::table('edk_reserves_reserve_species', function($table)
        {
            $table->increments('id')->unsigned(false)->change();
        });
    }
    
    public function down()
    {
        Schema::table('edk_reserves_reserve_species', function($table)
        {
            $table->increments('id')->unsigned()->change();
        });
    }
}
