<?php

namespace App\Models;

use App\Models\Fasilitashotel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fasilitaskamar extends Model
{
    use HasFactory;
    protected $table = "fasilitaskamars";
    protected $fillable = [
        'tipekamar','fasilitashotel_id','jumlahkamar', 'jumlahkamar_tersedia', 'jumlahkamar_takterpakai', 'jumlahkamar_pinjam', 'tarif'
    ];
    public function fasilitashotel()
    {
        return $this->belongsTo(Fasilitashotel::class);
    }
    public function datapemesanan()
    {
        return $this->belongsTo(Datapemesanan::class);
    }
}
