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
        Schema::create('atractivoturisticos', function (Blueprint $table) {
            $table->id();
            $table->string("imagen");
            $table->string("descripcion");
            $table->string("imagen")->nullable();
            $table->string("ubicacion");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('atractivoturisticos');
    }
};
