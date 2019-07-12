<?php namespace Edk\Reserves\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateEdkReservesReserve extends Migration
{
    public function up()
    {
        Schema::create('edk_reserves_reserve', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('name');
            $table->text('description');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('edk_reserves_reserve');
    }
}
