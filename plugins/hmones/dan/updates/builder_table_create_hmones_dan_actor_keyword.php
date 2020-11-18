<?php namespace Hmones\Dan\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateHmonesDanActorKeyword extends Migration
{
    public function up()
    {
        Schema::create('hmones_dan_actor_keyword', function($table)
        {
            $table->engine = 'InnoDB';
            $table->bigInteger('actor_id')->unsigned();
            $table->integer('keyword_id')->unsigned();
            $table->primary(['actor_id','keyword_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('hmones_dan_actor_keyword');
    }
}
