<?php namespace October\Demo\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateDropdownsTable extends Migration
{
    public function up()
    {
        Schema::create('october_demo_dropdowns', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->string('a')->nullable();
            $table->string('b')->nullable();
            $table->string('c')->nullable();
            $table->string('d')->nullable();
            $table->string('e')->nullable();
            $table->string('f')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('october_demo_dropdowns');
    }
}
