<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('company');
            $table->string('cnpj');
            $table->string('responsible');
            $table->string('cellphone');
            $table->string('cellphone2');
            $table->string('email');
            $table->string('cep');
            $table->string('street');
            $table->string('number');
            $table->string('complement');
            $table->string('city');
            $table->string('state');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
