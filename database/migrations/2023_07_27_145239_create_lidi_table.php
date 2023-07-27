<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lidi', function (Blueprint $table) {
            $table->id();
            $table->string("lidi", 100);
            $table->string("località", 100);
            $table->integer("numero_ombrelloni");
            $table->integer("numero_lettini");
            $table->float("prezzo_ombrellone_giorno");
            $table->date("data_apertura");
            $table->date("data_chiusura");
            $table->boolean("campo_beach_volley");
            $table->boolean("campo_calcio");
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
        Schema::dropIfExists('lidi');
    }
};
