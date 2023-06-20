<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillable = [
        'no_hp',
        'nama',
        'harga',
        'email',
        'password'
    ];
    public function orders()
    {
        return $this->hasMany(Kategori_produk::class);
    }
}