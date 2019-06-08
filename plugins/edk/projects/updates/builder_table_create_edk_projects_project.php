<?php namespace Edk\Projects\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateEdkProjectsProject extends Migration
{
    public function up()
    {
        Schema::create('edk_projects_project', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('edk_projects_project');
    }
}
