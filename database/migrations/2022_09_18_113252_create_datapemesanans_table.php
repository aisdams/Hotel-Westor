<?php

use App\Models\Datapemesanan;
use App\Models\Fasilitashotel;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->string('email');
            $table->string('notelp');
            $table->string('status');
            $table->foreignId('fasilitashotel_id')->nullable();
            $table->foreignId('fasilitaskamar_id');
            $table->text('spesialrequest')->nullable();
            $table->integer('jumlahkamar_pinjam');
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
