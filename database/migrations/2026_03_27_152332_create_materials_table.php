<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    //Função que criar a tabela quando roda o comandomigrate
    public function up(): void
    {
        Schema::create('materials', function (Blueprint $table) {
            $table->id();
            $table->string("name", 100);
            $table->string("description");
            $table->string("file_url");

            $table->unsignedBigInteger("user_id");
            $table->foreign('user_id')->references('id')->on('users');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    //Função que retorna o varsão do banco de dados
    public function down(): void
    {
        Schema::dropIfExists('materials');
    }
};
