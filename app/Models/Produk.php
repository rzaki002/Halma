<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama', 
        'id_kategori', 
        'harga', 
        'keterangan', 
        'id_satuan', 
        'gambar',
    ];

    public function satuan(){
        return $this->belongsTo(Satuan::class,'id_kategori');
    }
}
