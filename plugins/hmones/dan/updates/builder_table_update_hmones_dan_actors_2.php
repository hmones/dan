<?php namespace Hmones\Dan\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateHmonesDanActors2 extends Migration
{
    public function up()
    {
        Schema::table('hmones_dan_actors', function($table)
        {
            $table->string('name', 500)->change();
            $table->string('website', 500)->change();
            $table->string('linkedin', 500)->change();
            $table->string('email', 255)->change();
            $table->text('contact_context')->nullable()->unsigned(false)->default(null)->change();
            $table->string('slug', 500)->change();
        });
    }
    
    public function down()
    {
        Schema::table('hmones_dan_actors', function($table)
        {
            $table->string('name', 191)->change();
            $table->string('website', 191)->change();
            $table->string('linkedin', 191)->change();
            $table->string('email', 191)->change();
            $table->string('contact_context', 191)->nullable()->unsigned(false)->default(null)->change();
            $table->string('slug', 191)->change();
        });
    }
}
