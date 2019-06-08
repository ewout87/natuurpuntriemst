<?php namespace Edk\Events\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateEdkEventsEvent extends Migration
{
    public function up()
    {
        Schema::create('edk_events_event', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('edk_events_event');
    }
}
