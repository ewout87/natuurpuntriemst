<?php namespace EwoutDuyck\Map\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEwoutduyckMapLocations2 extends Migration
{
    public function up()
    {
        Schema::table('ewoutduyck_map_locations', function($table)
        {
            $table->integer('lat')->nullable();
            $table->integer('long')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('ewoutduyck_map_locations', function($table)
        {
            $table->dropColumn('lat');
            $table->dropColumn('long');
        });
    }
}
