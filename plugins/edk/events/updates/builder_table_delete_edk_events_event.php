<?php namespace Edk\Events\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteEdkEventsEvent extends Migration
{
    public function up()
    {
        Schema::dropIfExists('edk_events_event');
    }
    
    public function down()
    {
        Schema::create('edk_events_event', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
        });
    }
}
