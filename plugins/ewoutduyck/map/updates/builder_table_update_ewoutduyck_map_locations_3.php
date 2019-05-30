<?php namespace EwoutDuyck\Map\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEwoutduyckMapLocations3 extends Migration
{
    public function up()
    {
        Schema::table('ewoutduyck_map_locations', function($table)
        {
            $table->text('species')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('ewoutduyck_map_locations', function($table)
        {
            $table->dropColumn('species');
        });
    }
}
