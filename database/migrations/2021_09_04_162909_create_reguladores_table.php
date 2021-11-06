<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReguladoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reguladores', function (Blueprint $table) {
            $table->id();
            $table->string('area');
            $table->string('titular');
            $table->string('marca');
            $table->string('modelo');
            $table->string('serie');
            $table->string('observaciones');
            $table->string('imagen1');
            $table->string('imagen2');
            $table->string('imagen3');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reguladores');
    }
}
