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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('denumire_firma');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();

            // Extra
            $table->string('cui_firma')->nullable();
            $table->string('reg_firma')->nullable();
            $table->string('adresa_firma')->nullable();
            $table->string('localitate_firma')->nullable();
            $table->string('judet_firma')->nullable();
            $table->string('capital_firma')->nullable();
            $table->string('telefon_firma')->nullable();
            $table->string('fax_firma')->nullable();
            $table->string('email_firma')->nullable();
            $table->string('website_firma')->nullable();
            $table->string('aditionale_firma')->nullable();
            $table->string('nume_administrator_firma')->nullable();
            $table->string('email_administrator_firma')->nullable();
            $table->string('telefon_administrator_firma')->nullable();
            $table->string('adresa_administrator_firma')->nullable();
            $table->string('oras_administrator_firma')->nullable();
            $table->string('judet_administrator_firma')->nullable();
            $table->string('tara_administrator_firma')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
