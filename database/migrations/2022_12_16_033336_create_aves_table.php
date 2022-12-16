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
        Schema::create('table_aves', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_comun');
            $table->string('nombre_cientifico');
            $table->string('familia');
            $table->string('especie');
            $table->string('imagen');

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
        Schema::dropIfExists('table_aves');
    }
};
