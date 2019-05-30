<?php namespace EwoutDuyck\Map\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEwoutduyckMapCategories extends Migration
{
    public function up()
    {
        Schema::table('ewoutduyck_map_categories', function($table)
        {
            $table->integer('icon')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('ewoutduyck_map_categories', function($table)
        {
            $table->dropColumn('icon');
        });
    }
}
