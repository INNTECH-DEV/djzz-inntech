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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->integer('status');
            $table->string('nume_client');
            $table->string('prenume_client');
            $table->string('email_client');
            $table->string('telefon_client');
            $table->string('id_user');
            $table->string('localitate')->nullable();   
            $table->string('judet')->nullable();
            $table->string('strada')->nullable();
            $table->string('cod_postal')->nullable();
            $table->string('nr_strada')->nullable();
            $table->string('apartament')->nullable();  
            $table->string('bloc')->nullable(); 
            $table->string('scara')->nullable();
            $table->string('etaj')->nullable();
            $table->string('localitate_consum')->nullable();   
            $table->string('judet_consum')->nullable();
            $table->string('strada_consum')->nullable();
            $table->string('cod_postal_consum')->nullable();
            $table->string('nr_strada_consum')->nullable();
            $table->string('etaj_consum')->nullable();
            $table->string('apartament_consum')->nullable();  
            $table->string('bloc_consum')->nullable(); 
            $table->string('scara_consum')->nullable();  
            $table->string('nlc')->nullable(); 
            $table->string('cod_client')->nullable(); 
            $table->string('nr_afm')->nullable(); 
            $table->string('putere_panou')->nullable();
            $table->string('putere_invertor')->nullable();
            $table->string('nume_invertor')->nullable();
            $table->string('serie_invertor')->nullable();
            $table->string('producator_invertor')->nullable();
            $table->string('model_invertor')->nullable();
            $table->string('nr_panouri')->nullable();
            $table->string('serie_smartmeter')->nullable();
            $table->string('nume_smartmeter')->nullable();
            $table->string('model_smartmeter')->nullable();
            $table->string('serie_factura_finala')->nullable();
            $table->string('data_factura_finala')->nullable();
            $table->string('atr')->nullable();
            $table->string('cnp')->nullable();
            $table->string('nr_carte_funciara')->nullable();
            $table->string('nr_cadastral')->nullable();
            $table->string('serie_buletin')->nullable();
            $table->string('nr_buletin')->nullable();
            $table->string('valoare_contract')->nullable();
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
        Schema::dropIfExists('clients');
    }
};
