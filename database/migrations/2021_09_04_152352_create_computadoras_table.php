<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComputadorasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('computadoras', function (Blueprint $table) {
            $table->id();
            $table->string('marca');
            $table->string('tipo');
            $table->string('modelo');
            $table->string('numero_serie');
            $table->string('size_hdd');
            $table->string('size_ssd');
            $table->string('SO');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
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
        Schema::dropIfExists('computadoras');
    }
}
