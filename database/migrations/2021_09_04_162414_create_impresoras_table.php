<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImpresorasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('impresoras', function (Blueprint $table) {
            $table->id();
            $table->string('area');
            $table->string('titular');
            $table->string('marca');
            $table->string('modelo');
            $table->string('tipo');
            $table->string('serie');
            $table->string('observaciones');
            $table->foreignId('user_id')->constrained();
            $table->string('imagen1');
            $table->string('imagen2');
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
        Schema::dropIfExists('impresoras');
    }
}
