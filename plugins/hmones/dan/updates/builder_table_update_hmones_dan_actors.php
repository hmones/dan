<?php namespace Hmones\Dan\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateHmonesDanActors extends Migration
{
    public function up()
    {
        Schema::table('hmones_dan_actors', function($table)
        {
            $table->string('slug')->index();
        });
    }
    
    public function down()
    {
        Schema::table('hmones_dan_actors', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
