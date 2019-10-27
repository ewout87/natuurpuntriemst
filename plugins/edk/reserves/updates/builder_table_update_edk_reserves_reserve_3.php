<?php namespace Edk\Reserves\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEdkReservesReserve3 extends Migration
{
    public function up()
    {
        Schema::table('edk_reserves_reserve', function($table)
        {
            $table->text('intro')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('edk_reserves_reserve', function($table)
        {
            $table->dropColumn('intro');
        });
    }
}
