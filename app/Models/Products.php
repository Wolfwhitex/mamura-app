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
        'Stock',
        'FotoProduk',
    ];
}
