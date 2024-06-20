<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class review extends Model
{
    use HasFactory;
    protected $fillable = [
        'ProductID',
        'CustomerID',
        'Rating',
        'TokoID',
    ];
    public function Products()
    {
        return $this->belongsTo(Products::class);
    }
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
    public function datatoko()
    {
        return $this->belongsTo(Datatoko::class);
    }

}
