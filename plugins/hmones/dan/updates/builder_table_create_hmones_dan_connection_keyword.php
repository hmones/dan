<?php namespace Hmones\Dan\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateHmonesDanConnectionKeyword extends Migration
{
    public function up()
    {
        Schema::create('hmones_dan_connection_keyword', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('connection_id')->unsigned();
            $table->integer('keyword_id')->unsigned();
            $table->primary(['connection_id','keyword_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('hmones_dan_connection_keyword');
    }
}
