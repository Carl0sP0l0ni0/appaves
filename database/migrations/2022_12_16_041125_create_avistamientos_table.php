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
        Schema::create('table_avistamientos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ornitologo_id')->constrained('table_ornitologos');
            $table->foreignId('ave_id')->constrained('table_aves');
            $table->date('fecha');
            $table->string('ubicacion');
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
        Schema::dropIfExists('table_avistamientos');
    }
};
