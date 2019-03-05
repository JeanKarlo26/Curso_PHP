<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProveedoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedores', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->string('razon_social');
            $table->string('numero_documento', 21)->nullable();
            $table->string('contacto_nombre')->nullable(); 
            $table->string('direccion')->nullable();
            $table->string('email', 150)->nullable();
            $table->string('celular', 150)->nullable();
            $table->text('observacion')->nullable();
            $table->boolean('es_activo')->default(true);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proveedores');
    }
}
