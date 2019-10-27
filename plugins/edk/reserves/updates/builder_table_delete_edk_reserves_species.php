<?php namespace Edk\Reserves\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteEdkReservesSpecies extends Migration
{
    public function up()
    {
        Schema::dropIfExists('edk_reserves_species');
    }
    
    public function down()
    {
        Schema::create('edk_reserves_species', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 191)->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
}
