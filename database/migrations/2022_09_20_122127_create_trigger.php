<?php

use Illuminate\Support\Facades\DB;
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
        DB::unprepared('CREATE TRIGGER update_jumlahkamar after INSERT ON datapemesanans
            FOR EACH ROW
            BEGIN UPDATE fasilitaskamars set
            jumlahkamar_tersedia = jumlahkamar_tersedia - NEW.jumlahkamar_pinjam
            WHERE fasilitashotel_id = NEW.fasilitashotel_id;
            END'
        );

        DB::unprepared('CREATE TRIGGER delete_jumlahkamar after UPDATE ON datapemesanans
            FOR EACH ROW
            BEGIN UPDATE fasilitaskamars set
            jumlahkamar_tersedia = jumlahkamar_tersedia + OLD.jumlahkamar_pinjam
            WHERE fasilitashotel_id = OLD.fasilitashotel_id;
            END'
        );

        DB::unprepared('CREATE TRIGGER update_pemesanan after INSERT ON datapemesanans
            FOR EACH ROW
            BEGIN UPDATE fasilitaskamars set
            jumlahkamar_pinjam = jumlahkamar_pinjam + NEW.jumlahkamar_pinjam
            WHERE fasilitashotel_id = NEW.fasilitashotel_id;
            END'
        );

        DB::unprepared('CREATE TRIGGER update_pemesanan_update after UPDATE ON datapemesanans
            FOR EACH ROW
            BEGIN UPDATE fasilitaskamars set
            jumlahkamar_pinjam = jumlahkamar_pinjam - OLD.jumlahkamar_pinjam
            WHERE fasilitashotel_id = OLD.fasilitashotel_id;
            END'
        );

        DB::unprepared('CREATE TRIGGER update_plus after UPDATE ON datapemesanans
            FOR EACH ROW
            BEGIN UPDATE fasilitaskamars set
            jumlahkamar_tersedia = jumlahkamar_tersedia - NEW.jumlahkamar_pinjam
            WHERE fasilitashotel_id = NEW.fasilitashotel_id;
            END'
        );

        DB::unprepared('CREATE TRIGGER before_update before UPDATE ON datapemesanans
            FOR EACH ROW
            BEGIN UPDATE fasilitaskamars set
            jumlahkamar_tersedia = jumlahkamar_tersedia + OLD.jumlahkamar_pinjam
            WHERE fasilitashotel_id = OLD.fasilitashotel_id;
            END'
        );

        DB::unprepared('CREATE TRIGGER before_updatepemesanan before UPDATE ON datapemesanans
            FOR EACH ROW
            BEGIN UPDATE fasilitaskamars set
            jumlahkamar_pinjam = jumlahkamar_pinjam - OLD.jumlahkamar_pinjam
            WHERE fasilitashotel_id = OLD.fasilitashotel_id;
            END'
        );

        DB::unprepared('CREATE TRIGGER after_updatepemesanan after UPDATE ON datapemesanans
            FOR EACH ROW
            BEGIN UPDATE fasilitaskamars set
            jumlahkamar_pinjam = jumlahkamar_pinjam + NEW.jumlahkamar_pinjam
            WHERE fasilitashotel_id = OLD.fasilitashotel_id;
            END'
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP TRIGGER update_jumlahkamar');
        DB::unprepared('DROP TRIGGER delete_jumlahkamar');
        DB::unprepared('DROP TRIGGER update_pemesanan');
        DB::unprepared('DROP TRIGGER update_pemesanan_delete');
        DB::unprepared('DROP TRIGGER update_plus');
        DB::unprepared('DROP TRIGGER before_update');
        DB::unprepared('DROP TRIGGER before_updatepemesanan');
        DB::unprepared('DROP TRIGGER after_updatepemesanan');
    }
};
