<?php namespace Hmones\Dan\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateHmonesDanKeywords extends Migration
{
    public function up()
    {
        Schema::create('hmones_dan_keywords', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('sphere')->index();
            $table->string('keyword')->index();
            $table->string('slug')->index();
            $table->text('comment')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('hmones_dan_keywords');
    }
}
