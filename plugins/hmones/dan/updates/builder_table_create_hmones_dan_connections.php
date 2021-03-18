<?php namespace Hmones\Dan\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateHmonesDanConnections extends Migration
{
    public function up()
    {
        Schema::create('hmones_dan_connections', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('type', 255)->index();
            $table->string('title', 100)->nullable();
            $table->string('gender', 100)->nullable()->index();
            $table->string('first_name', 255);
            $table->string('last_name', 255);
            $table->string('professional_title', 500)->nullable();
            $table->string('professional_affiliation', 500)->nullable();
            $table->string('country_origin', 255)->nullable()->index();
            $table->string('address', 500)->nullable();
            $table->string('country', 255)->nullable()->index();
            $table->string('city', 255)->nullable()->index();
            $table->string('mobile', 255)->nullable();
            $table->string('phone', 255)->nullable();
            $table->string('email', 400)->nullable();
            $table->string('website', 500)->nullable();
            $table->string('linkedin', 500)->nullable();
            $table->text('bio')->nullable();
            $table->text('history_with_gpp')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('hmones_dan_connections');
    }
}
