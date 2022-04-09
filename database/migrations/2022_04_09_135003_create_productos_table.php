<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            //Para q la tabla sea cascade(InnoDB) o sea para q cuando se elimine una categoria tambn se elimine todos sus productos
            $table->engine="InnoDB";

            $table->bigIncrements('id');
            //usado para q el id sea positivo
            $table->bigInteger('catalogo_id')->unsigned();
            //slug para q en el link haga referncia al titulo y sea unico link por cada post
            $table->string('fecha_ingreso');
            $table->string('fecha_salida');
            $table->string('marca');
            $table->string('presentacion');
            $table->string('lote');
            $table->string('fecha_vencimiento');
            $table->string('resp_ingreso');
            $table->string('resp_salida');
            $table->string('precio_sin_igv');
            $table->string('area');
            $table->string('cant_entrada');
            $table->string('cant_salida');
            $table->string('saldo');

            // $table->string('slug')->unique();
            // //image nullable puede estar vacio sera un url
            // $table->string('image')->nullable();
            // //iframe sera para los videos o podcast
            // $table->text('descripcion');

            $table->timestamps();
            //conexion para referencia onDelete ara ser borrado en cascada
            $table->foreign('catalogo_id')->references('id')->on('catalogos')->onDelete("cascade");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
};
