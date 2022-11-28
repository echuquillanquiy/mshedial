<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateErcsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ercs', function (Blueprint $table) {
            $table->id();

            $table->string('etiology');
            $table->date('dx_date');
            $table->string('ipress');
            $table->date('start_ipress');
            $table->date('current_ipress_date');

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
        Schema::dropIfExists('ercs');
    }
}
