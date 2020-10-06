<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->string('logradouro');
            $table->integer('numero');
            $table->string('bairro', 100);
            $table->string('cidade');
            $table->string('uf', 2);
            $table->string('cep', 15);
            $table->string('complemento')->nullable();
            $table->timestamps();
            $table->foreignId('person_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addresses');
    }
}
