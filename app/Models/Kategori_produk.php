<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori_produk extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'keterangan',
    ];
    // hasmany ke produk
    // public function produk()
    // {
    //     return $this->hasOne(Produk::class);
    // }
    public function produk(){
        return $this->hasMany(Produk::class,'id_kategori');
    }
}