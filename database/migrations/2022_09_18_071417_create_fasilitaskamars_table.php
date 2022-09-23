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
        Schema::create('fasilitaskamars', function (Blueprint $table) {
            $table->id();
            $table->enum('tipekamar',['Standar Room','Superior Room','Deluxe Room','Twin Room','Presidential Suite','Murphy Room','Cabana Room','Penthouse Room']);
            $table->foreignId('fasilitashotel_id');
            $table->string('fasilitaskamar');
            $table->integer('jumlahkamar');
            $table->integer('jumlahkamar_tersedia');
            $table->integer('jumlahkamar_takterpakai');
            $table->integer('jumlahkamar_pinjam');
            $table->string('tarif');
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
        Schema::dropIfExists('fasilitaskamars');
    }
};
