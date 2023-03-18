<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTreatmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('treatments', function (Blueprint $table) {
            $table->id();

            $table->foreignId('order_id')->constrained()->onUpdate('cascade');
            $table->foreignId('patient_id')->constrained()->onUpdate('cascade');
            $table->foreignId('module_id')->constrained()->onUpdate('cascade');
            $table->foreignId('session_id')->constrained()->onUpdate('cascade');
            $table->foreignId('user_id')->constrained()->onUpdate('cascade');

            $table->string('hr', 25)->nullable();
            $table->string('pa', 25)->nullable();
            $table->string('freq', 25)->nullable();
            $table->string('qb', 25)->nullable();
            $table->string('cnd', 25)->nullable();
            $table->string('ra', 25)->nullable();
            $table->string('rv', 25)->nullable();
            $table->string('ptm', 25)->nullable();
            $table->text('sol_hemodev')->nullable();
            $table->text('obs')->nullable();

            $table->string('hr2', 25)->nullable();
            $table->string('pa2', 25)->nullable();
            $table->string('freq2', 25)->nullable();
            $table->string('qb2', 25)->nullable();
            $table->string('cnd2', 25)->nullable();
            $table->string('ra2', 25)->nullable();
            $table->string('rv2', 25)->nullable();
            $table->string('ptm2', 25)->nullable();
            $table->text('sol_hemodev2')->nullable();
            $table->text('obs2')->nullable();

            $table->string('hr3', 25)->nullable();
            $table->string('pa3', 25)->nullable();
            $table->string('freq3', 25)->nullable();
            $table->string('qb3', 25)->nullable();
            $table->string('cnd3', 25)->nullable();
            $table->string('ra3', 25)->nullable();
            $table->string('rv3', 25)->nullable();
            $table->string('ptm3', 25)->nullable();
            $table->text('sol_hemodev3')->nullable();
            $table->text('obs3')->nullable();

            $table->string('hr4', 25)->nullable();
            $table->string('pa4', 25)->nullable();
            $table->string('freq4', 25)->nullable();
            $table->string('qb4', 25)->nullable();
            $table->string('cnd4', 25)->nullable();
            $table->string('ra4', 25)->nullable();
            $table->string('rv4', 25)->nullable();
            $table->string('ptm4', 25)->nullable();
            $table->text('sol_hemodev4')->nullable();
            $table->text('obs4')->nullable();

            $table->string('hr5', 25)->nullable();
            $table->string('pa5', 25)->nullable();
            $table->string('freq5', 25)->nullable();
            $table->string('qb5', 25)->nullable();
            $table->string('cnd5', 25)->nullable();
            $table->string('ra5', 25)->nullable();
            $table->string('rv5', 25)->nullable();
            $table->string('ptm5', 25)->nullable();
            $table->text('sol_hemodev5')->nullable();
            $table->text('obs5')->nullable();

            $table->string('hr6', 25)->nullable();
            $table->string('pa6', 25)->nullable();
            $table->string('freq6', 25)->nullable();
            $table->string('qb6', 25)->nullable();
            $table->string('cnd6', 25)->nullable();
            $table->string('ra6', 25)->nullable();
            $table->string('rv6', 25)->nullable();
            $table->string('ptm6', 25)->nullable();
            $table->text('sol_hemodev6')->nullable();
            $table->text('obs6')->nullable();

            $table->string('hr7', 25)->nullable();
            $table->string('pa7', 25)->nullable();
            $table->string('freq7', 25)->nullable();
            $table->string('qb7', 25)->nullable();
            $table->string('cnd7', 25)->nullable();
            $table->string('ra7', 25)->nullable();
            $table->string('rv7', 25)->nullable();
            $table->string('ptm7', 25)->nullable();
            $table->text('sol_hemodev7')->nullable();
            $table->text('obs7')->nullable();

            $table->string('hr8', 25)->nullable();
            $table->string('pa8', 25)->nullable();
            $table->string('freq8', 25)->nullable();
            $table->string('qb8', 25)->nullable();
            $table->string('cnd8', 25)->nullable();
            $table->string('ra8', 25)->nullable();
            $table->string('rv8', 25)->nullable();
            $table->string('ptm8', 25)->nullable();
            $table->text('sol_hemodev8')->nullable();
            $table->text('obs8')->nullable();

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
        Schema::dropIfExists('treatments');
    }
}
