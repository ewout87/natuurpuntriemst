<?php namespace Edk\Reserves\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEdkReservesReserveSpecies2 extends Migration
{
    public function up()
    {
        Schema::table('edk_reserves_reserve_species', function($table)
        {
            $table->integer('reserve_id');
            $table->dropColumn('id');
            $table->primary(['reserve_id']);
        });
    }
    
    public function down()
    {
        Schema::table('edk_reserves_reserve_species', function($table)
        {
            $table->dropPrimary(['reserve_id']);
            $table->dropColumn('reserve_id');
            $table->increments('id');
        });
    }
}
