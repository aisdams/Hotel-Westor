<?php

namespace App\Models;

use App\Models\User;
use App\Models\Fasilitaskamar;
use Illuminate\Support\Carbon; 
use App\Models\Fasilitashotel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Datapemesanan extends Model
{
    protected $fillable = [
        'bprorng','firstname', 'lastname', 'email','notelp','fasilitaskamar_id','fasilitashotel_id','jumlahkamar_pinjam','status','spesialrequest', 'tanggal_checkin', 'tanggal_checkout'
    ];
    use HasFactory;
    protected $dates = [
        'tanggal_checkin',
        'tanggal_checkout',
        // your other new column
    ];

    protected $primaryKey = "id";
    public function fasilitaskamar(){
        return $this->belongsTo(Fasilitaskamar::class);
    }
    public function fasilitashotel()
    {
        return $this->belongsTo(Fasilitashotel::class);
    }
}
