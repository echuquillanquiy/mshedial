<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSerologiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('serologies', function (Blueprint $table) {
            $table->id();

            $table->string('exam');
            $table->enum('resultado', ['POSITIVO', 'NEGATIVO'])->default('NEGATIVO');
            $table->date('date_exam');


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
        Schema::dropIfExists('serologies');
    }
}
