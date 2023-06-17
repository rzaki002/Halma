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
}
// belongsto order