<?php

namespace App\Models;

use App\Models\User;
use App\Models\Fasilitaskamar;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Datapemesanan extends Model
{
    protected $fillable = [
        'bprorng','firstname', 'lastname', 'email','notelp','fasilitaskamar_id','spesialrequest', 'tanggal_checkin', 'tanggal_checkout'
    ];
    use HasFactory;
    protected $table = "datapemesanans";
    protected $primaryKey = 'id';
    public function fasilitaskamar(){
        return $this->hasMany(Fasilitaskamar::class);
    }
}
