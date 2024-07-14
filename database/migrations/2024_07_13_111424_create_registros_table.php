<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('registros', function (Blueprint $table) {
            $table->id();
            $table->string('folio',20)->nullable();
            $table->string('nombre');
            $table->string('apellido_paterno')->nullable();
            $table->string('apellido_materno')->nullable();
            $table->string('municipio')->nullable();
            $table->string('modalidad')->nullable();
            $table->string('telefono',10)->nullable();
            $table->string('email')->nullable();
            $table->date('fechanacimiento')->nullable();
            $table->string('carta',100)->nullable();
            $table->string('extension_carta',4)->nullable();
            $table->string('tamanio_carta',20)->nullable();
            $table->string('representacion')->nullable();
            $table->string('organizacion')->nullable();
            $table->string('discapacidad')->nullable();
            $table->string('temaPropuesta')->nullable();
            $table->string('tipoPropuesta')->nullable();
            $table->text('escrito')->nullable();
            $table->string('documento',100)->nullable();
            $table->string('extension_documento',4)->nullable();
            $table->string('tamanio_documento',20)->nullable();
            $table->string('video',100)->nullable();
            $table->string('extension_video',4)->nullable();
            $table->string('tamanio_video',20)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registros');
    }
};
