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
        Schema::create('datapemesanans', function (Blueprint $table) {
            $table->id();
            $table->string('bprorng');
            $table->string('firstname');
            $table->string('lastname');
            $table->foreignId('user_id');
            $table->foreignId('fasilitaskamar_id');
            $table->text('spesialrequest');
            $table->date('tanggal_checkin');
            $table->date('tanggal_checkout');
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
        Schema::dropIfExists('datapemesanans');
    }
};
