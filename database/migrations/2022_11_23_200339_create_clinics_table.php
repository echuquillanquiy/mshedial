<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClinicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinics', function (Blueprint $table) {
            $table->id();

            $table->enum('symptomatic', ['SI', 'NO'])->default('NO');
            $table->string('time_symptom');
            $table->enum('symptom', ['ICTERICIA', 'MALESTAR GENERAL', 'ASTENIA', 'NAUSEAS / VOMITOS', 'COLURIA']);
            $table->text('others');
            $table->string('result_tgp');
            $table->date('date_tgp');
            $table->string('result_tgo');
            $table->date('date_tgo');
            $table->enum('transaminasas', ['SI', 'NO'])->default('NO');
            $table->string('obs1');
            $table->enum('variations', ['SI', 'NO'])->default('NO');
            $table->string('obs2');
            $table->enum('treatments', ['SI', 'NO'])->default('NO');
            $table->string('detail');

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
        Schema::dropIfExists('clinics');
    }
}
