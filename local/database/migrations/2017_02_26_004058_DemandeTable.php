<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DemandeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('DemandeDevis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('raison');
            $table->string('nom');
            $table->string('poste');
            $table->string('email');
            $table->string('tel1');
            $table->string('tel2');
            $table->string('activite');
            $table->string('solution');
            $table->string('message');
             $table->string('file');
            $table->string('date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
