<?php namespace Hmones\Dan\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateHmonesDanActors3 extends Migration
{
    public function up()
    {
        Schema::table('hmones_dan_actors', function($table)
        {
            $table->string('company_name', 500)->after('name')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('hmones_dan_actors', function($table)
        {
            $table->dropColumn('company_name');
        });
    }
}
