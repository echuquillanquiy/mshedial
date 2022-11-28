<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectorizationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sectorizations', function (Blueprint $table) {
            $table->id();

            $table->string('frequency');
            $table->string('turn');
            $table->enum('changes_month', ['SI', 'NO'])->default('NO');
            $table->string('change_reason');
            $table->enum('changes_machine', ['SI', 'NO'])->default('NO');
            $table->string('reason_machine');
            $table->enum('antecedent', ['SI', 'NO'])->default('NO');
            $table->string('who');
            $table->enum('vaccines_vhb', ['SI', 'NO'])->default('NO');
            $table->string('reason_vaccines');
            $table->enum('scheme_vaccines', ['SI', 'NO'])->default('NO');
            $table->string('n_reinforcement');
            $table->string('place1');
            $table->date('first1');
            $table->string('place2');
            $table->date('first2');
            $table->string('place3');
            $table->date('first3');
            $table->enum('last_serico', ['SI', 'NO', 'DESCONOCIDO'])->default('NO');
            $table->string('value');
            $table->date('analysis');

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
        Schema::dropIfExists('sectorizations');
    }
}
