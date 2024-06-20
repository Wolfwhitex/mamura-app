<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $table = 'products'; // Specify the actual table name if different

    protected $primaryKey = 'ProductID'; // Specify the primary key column name if different
    protected $fillable = [
        'Nama',
        'Deskripsi',
        'Harga',
        'Stok',
        'FotoProduk',
    ];
    public function cart()
    {
        return $this->hasMany(Cart::class);
    }
    public function categories()
    {
        return $this->belongsTo(Categories::class);
    }
    public function datatoko()
    {
        return $this->belongsTo(Datatoko::class);
    }
    public function review()
    {
        return $this->hasMany(Review::class);
    }
}
