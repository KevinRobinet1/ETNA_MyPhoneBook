<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCollaborateurTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collaborateur', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->varchar('civilite');
            $table->varchar('nom');
            $table->varchar('prenom');
            $table->text('rue');
            $table->integer('code_postal');
            $table->varchar('ville');
            $table->varchar('telephone',12)->unique();
            $table->varchar('email')->unique();
            $table->varchar('entreprise');
            $table->primary('id');
            $table->foreign('entreprise')->references('nom')->on('entreprise');
        }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('collaborateur');
    }
}
