<?php namespace Edk\Reserves\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEdkReservesReserveSpecies3 extends Migration
{
    public function up()
    {
        Schema::table('edk_reserves_reserve_species', function($table)
        {
            $table->dropPrimary(['reserve_id']);
            $table->integer('species_id');
            $table->primary(['reserve_id','species_id']);
        });
    }
    
    public function down()
    {
        Schema::table('edk_reserves_reserve_species', function($table)
        {
            $table->dropPrimary(['reserve_id','species_id']);
            $table->dropColumn('species_id');
            $table->primary(['reserve_id']);
        });
    }
}
