<?php namespace Hmones\Dan\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateHmonesDanConnections extends Migration
{
    public function up()
    {
        Schema::table('hmones_dan_connections', function($table)
        {
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('hmones_dan_connections', function($table)
        {
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
    }
}
