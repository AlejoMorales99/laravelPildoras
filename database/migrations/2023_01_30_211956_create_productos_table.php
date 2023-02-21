<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string("nombreArticulo");
            $table->string("seccion");
            $table->integer("precio");
            $table->string("fecha");
            $table->string("paisOrigen");
            
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('productos');
    }
};
