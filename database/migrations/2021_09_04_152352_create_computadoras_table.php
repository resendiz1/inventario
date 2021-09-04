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
            $table->string('area');
            $table->string('marca');
            $table->string('modelo');
            $table->string('pulgadas');
            $table->string('touch');
            $table->string('SO');
            $table->string('procesador');
            $table->string('usuario');
            $table->string('ip');
            $table->string('mac');
            $table->string('tipo');
            $table->string('serie');
            $table->string('frecuencia_ram');
            $table->string('tipo_ram');
            $table->string('size_hdd');
            $table->string('size_ssd');
            $table->string('slot1_ram');
            $table->string('slot2_ram');
            $table->string('slot3_ram');
            $table->string('slot4_ram');
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
