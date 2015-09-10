<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstadosTable extends Migration {

    /**
     * Run the migrations.
     *
     */
    public function up()
    {
        Schema::create('estados', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('estado');
            $table->string('sigla');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('estados');
    }

}
