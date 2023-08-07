<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_customer',
        'catatan',
        'status',
        'status_pengambilan',
        'alamat_kirim',
        'ongkir',
        'status_bayar',
    ];

    public function customer(){
        return $this->hasOne(Customer::class,'id','id_customer');
    }

    public function orderdetail(){
        return $this->hasOne(Order_detail::class,'id_order');
    }
}
