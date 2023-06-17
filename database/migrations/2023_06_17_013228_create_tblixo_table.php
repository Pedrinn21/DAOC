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
        Schema::create('tblixo', function (Blueprint $table) {
            //$table->integer('ID', true);
            $table->id();
            $table->string('nome')->nullable();
            $table->string('tipolixo')->nullable();
            $table->text('infolixo')->nullable();
            $table->string('carac')->nullable();
            $table->text('descarte')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblixo');
    }
};
