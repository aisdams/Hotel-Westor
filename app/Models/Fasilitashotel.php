<?php

namespace App\Models;

use App\Models\Datapemesanan;
use App\Models\Fasilitaskamar;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fasilitashotel extends Model
{
    use HasFactory;
    protected $fillable = [
        'namafasilitas','keterangan','image'
    ];
    public function fasilitaskamar(){
        return $this->hasMany(Fasilitaskamar::class);
    }
}
