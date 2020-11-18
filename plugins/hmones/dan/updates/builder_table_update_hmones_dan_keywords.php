<?php namespace Hmones\Dan\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateHmonesDanKeywords extends Migration
{
    public function up()
    {
        Schema::table('hmones_dan_keywords', function($table)
        {
            $table->string('sphere_slug')->index();
        });
    }
    
    public function down()
    {
        Schema::table('hmones_dan_keywords', function($table)
        {
            $table->dropColumn('sphere_slug');
        });
    }
}
