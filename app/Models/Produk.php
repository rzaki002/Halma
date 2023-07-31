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
        return $this->belongsTo(Satuan::class,'id');
    }
    public function kategori(){
        return $this->belongsTo(Kategori_produk::class,'id');
    }

    public function order(){
        return $this->hasOne(Order::class,'id_produk');
    }

    public function orderdetail(){{
        return $this->hasMany(Order_detail::class,'id_produk','id');
    }}
}
