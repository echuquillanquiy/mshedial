<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notifications', function (Blueprint $table) {
            $table->id();

            $table->string('ipress');
            $table->enum('case', ['HVV', 'HVC', 'HIV', 'NINGUNO'])->default('NINGUNO');
            $table->enum('clasification', ['CONFIRMADO', 'SOSPECHOSO', 'NINGUNO'])->default('NINGUNO');

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
        Schema::dropIfExists('notifications');
    }
}
