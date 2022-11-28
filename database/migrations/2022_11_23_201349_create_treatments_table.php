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

            $table->string('hr', 25)->nullable();
            $table->string('pa', 25)->nullable();
            $table->string('freq', 25, 25)->nullable();
            $table->string('qb', 25)->nullable();
            $table->string('cnd', 25)->nullable();
            $table->string('ra', 25)->nullable();
            $table->string('rv', 25)->nullable();
            $table->string('ptm', 25)->nullable();
            $table->text('sol_hemodev')->nullable();
            $table->text('obs')->nullable();

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
