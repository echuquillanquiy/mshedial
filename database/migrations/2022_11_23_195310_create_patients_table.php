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
            $table->string('firstname');
            $table->string('secondname');
            $table->string('surname');
            $table->string('lastname');
            $table->date('birthday')->nullable();
            $table->string('sex')->nullable();
            $table->string('age')->nullable();
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('civil_state')->nullable();
            $table->string('education')->nullable();
            $table->string('condition')->nullable();
            $table->string('code')->unique()->nullable();
            $table->string('sign')->nullable();
            $table->string('fingerprint')->nullable();
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
