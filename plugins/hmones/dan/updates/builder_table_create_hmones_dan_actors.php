<?php namespace Hmones\Dan\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateHmonesDanActors extends Migration
{
    public function up()
    {
        Schema::create('hmones_dan_actors', function($table)
        {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id')->unsigned();
            $table->boolean('is_person')->default(1)->index();
            $table->string('gender')->nullable()->index();
            $table->string('name')->index();
            $table->string('title')->nullable();
            $table->string('country')->index();
            $table->string('city')->index();
            $table->string('origin_country')->nullable()->index();
            $table->text('description')->nullable();
            $table->string('website')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('type')->default('Other')->index();
            $table->string('technology')->default('Other')->index();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('contact_context')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('hmones_dan_actors');
    }
}
