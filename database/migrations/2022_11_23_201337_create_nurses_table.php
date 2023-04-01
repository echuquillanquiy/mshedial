<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nurses', function (Blueprint $table) {
            $table->id();

            $table->foreignId('order_id')->constrained()->onUpdate('cascade');
            $table->foreignId('patient_id')->constrained()->onUpdate('cascade');
            $table->foreignId('module_id')->constrained()->onUpdate('cascade');
            $table->foreignId('session_id')->constrained()->onUpdate('cascade');
            $table->foreignId('user_id')->constrained()->onUpdate('cascade');

            $table->integer('hcl')->nullable();
            $table->string('frequency')->nullable();
            $table->integer('nhd')->nullable();
            $table->string('others')->nullable();
            $table->string('start_pa')->nullable();
            $table->string('end_pa')->nullable();
            $table->string('start_weight')->nullable();
            $table->string('end_weight')->nullable();
            $table->string('machine')->nullable();
            $table->string('brand_model')->nullable();
            $table->string('position')->nullable();
            $table->string('filter')->nullable();
            $table->string('uf')->nullable();
            $table->string('access_arterial')->nullable();
            $table->string('access_venoso')->nullable();
            $table->string('epo2000')->nullable();
            $table->string('epo4000')->nullable();
            $table->string('hidroxi')->nullable();
            $table->string('iron')->nullable();
            $table->string('calcitriol')->nullable();
            $table->string('others_med')->nullable();
            $table->text('end_observation')->nullable();
            $table->integer('aspect_dializer')->nullable();

            //Valoracion de enfermeria
            $table->text('s')->nullable();
            $table->text('o')->nullable();
            $table->text('a')->nullable();
            $table->text('p')->nullable();
            //Termina valoracion

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
        Schema::dropIfExists('nurses');
    }
}
