<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_detail extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_order',
        'id_produk',
        'qty',
        'harga',
        'deskripsi',
        'file',
    ];

    public function order(){
        return $this->hasOne(Order::class,'id');
    }

    public function produk(){
        return $this->belongsTo(Produk::class,'id_produk','id');
    }

}
