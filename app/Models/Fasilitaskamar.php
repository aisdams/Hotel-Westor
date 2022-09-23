<?php

namespace App\Models;

use App\Models\Datapemesanan;
use App\Models\Fasilitashotel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fasilitaskamar extends Model
{
    use HasFactory;
    protected $primaryKey = "id";
    protected $table = "fasilitaskamars";
    protected $fillable = [
        'tipekamar','fasilitashotel_id','fasilitaskamar','jumlahkamar', 'jumlahkamar_tersedia', 'jumlahkamar_takterpakai', 'jumlahkamar_pinjam', 'tarif'
    ];
    public function fasilitashotel()
    {
        return $this->belongsTo(Fasilitashotel::class);
    }
    public function datapemesanan()
    {
        return $this->hasMany(Datapemesanan::class);
    }
}
