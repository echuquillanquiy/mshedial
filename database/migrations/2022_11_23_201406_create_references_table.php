<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReferencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('references', function (Blueprint $table) {
            $table->id();

            $table->foreignId('patient_id')->constrained();

            $table->text('anamnesis');

            $table->string('temperature');
            $table->string('pa');
            $table->string('fr');
            $table->string('fc');
            $table->string('so2');
            $table->text('physical_exam');
            $table->text('dx');
            $table->text('treatments');
            $table->string('request1');
            $table->string('request2');
            $table->string('request3');
            $table->enum('service', ['EMERGENCIA', 'OTROS'])->default('EMERGENCIA');

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
        Schema::dropIfExists('references');
    }
}
