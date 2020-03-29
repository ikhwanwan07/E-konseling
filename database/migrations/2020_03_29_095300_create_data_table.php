<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nim');
            $table->string('nama');
            $table->double('ipk_sem_1');
            $table->double('ipk_sem_2');
            $table->double('ipk_sem_3');
            $table->double('ipk_sem_4');
            $table->double('ipk_sem_5');
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
        Schema::dropIfExists('data');
    }
}
