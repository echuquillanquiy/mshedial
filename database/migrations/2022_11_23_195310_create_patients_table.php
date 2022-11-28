<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();

            $table->string('dni')->unique();
            $table->string('name');
            $table->string('lastname');
            $table->date('birthday');
            $table->string('sex');
            $table->string('age');
            $table->string('address');
            $table->string('phone');
            $table->string('civil_state');
            $table->string('education');
            $table->string('ocupation');
            $table->string('condition');
            $table->date('last_work');
            $table->string('origin');
            $table->string('code');
            $table->enum('status', ['ACTIVE', 'INACTIVE'])->default('ACTIVE');

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
        Schema::dropIfExists('patients');
    }
}
