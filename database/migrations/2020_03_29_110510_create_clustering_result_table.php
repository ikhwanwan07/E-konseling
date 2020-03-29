<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClusteringResultTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clustering_result', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nim');
            $table->double('ipk_sem_1');
            $table->double('ipk_sem_2');
            $table->double('ipk_sem_3');
            $table->double('ipk_sem_4');
            $table->double('ipk_sem_5');
            $table->integer('cluster');
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
        Schema::dropIfExists('clustering_result');
    }
}
