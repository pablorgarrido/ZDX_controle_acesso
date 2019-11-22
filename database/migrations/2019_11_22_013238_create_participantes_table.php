<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParticipantesTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('participantes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps(4);
            $table->string('identificador')->nullable();
            $table->string('nome')->nullable();
            $table->string('foto')->nullable();
            $table->boolean('entrada')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('participantes');
    }
}
