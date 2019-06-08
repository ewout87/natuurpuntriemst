<?php namespace Edk\Projects\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEdkProjectsProject extends Migration
{
    public function up()
    {
        Schema::table('edk_projects_project', function($table)
        {
            $table->string('name', 191)->nullable();
            $table->text('description')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('edk_projects_project', function($table)
        {
            $table->dropColumn('name');
            $table->dropColumn('description');
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
    }
}
