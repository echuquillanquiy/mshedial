<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFuasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fuas', function (Blueprint $table) {
            $table->id();

            $table->foreignId('patient_id')->constrained()->onUpdate('cascade');
            $table->foreignId('user_id')->constrained()->onUpdate('cascade');

            $table->string('fa');
            $table->string('hour');
            $table->enum('regime', ['SUBSIDIADO', 'SEMICONTRIBUTIVO']);
            $table->enum('benefit', ['EXTERNA', 'AMBULATORIO']);
            $table->string('dx1');
            $table->string('dx2')->nullable();
            $table->string('dx3')->nullable();
            $table->string('dx4')->nullable();
            $table->string('dx5')->nullable();
            $table->string('dx6')->nullable();
            $table->string('in_charge', 1);
            $table->string('specialty');


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
        Schema::dropIfExists('fuas');
    }
}
