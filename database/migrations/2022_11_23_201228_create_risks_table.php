<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRisksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('risks', function (Blueprint $table) {
            $table->id();

            $table->enum('sexual_contact', ['SI', 'NO'])->default('NO');
            $table->enum('ets', ['SI', 'NO'])->default('NO');
            $table->date('date_tto');
            $table->enum('transfusions', ['SI', 'NO', 'DESCONOCIDO'])->default('NO');
            $table->string('type_product');
            $table->enum('n_transfusions', ['1', '2', '>3', 'NINGUNA'])->default('NINGUNA');
            $table->date('last_transfusion');
            $table->enum('drugs', ['SI', 'NO'])->default('NO');
            $table->enum('puncture', ['SI', 'NO'])->default('NO');
            $table->enum('product', ['SI', 'NO'])->default('NO');
            $table->enum('odontology', ['SI', 'NO'])->default('NO');
            $table->date('date_odontology');
            $table->enum('surgery', ['SI', 'NO'])->default('NO');
            $table->string('type_surgery');
            $table->date('date_surgery');
            $table->enum('hospitalized', ['SI', 'NO'])->default('NO');
            $table->date('date_hospitalized');
            $table->string('time_hospitalized');
            $table->enum('hd_hospital', ['SI', 'NO'])->default('NO');
            $table->enum('injections', ['SI', 'NO'])->default('NO');
            $table->enum('replacement', ['HD', 'DP', 'TR'])->default('HD');
            $table->string('n_units');
            $table->string('clinic1');
            $table->string('months1');
            $table->date('start_hd1');

            $table->string('clinic2');
            $table->string('months2');
            $table->date('start_hd2');

            $table->string('clinic3');
            $table->string('months3');
            $table->date('start_hd3');

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
        Schema::dropIfExists('risks');
    }
}
