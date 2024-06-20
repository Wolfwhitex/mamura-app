<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    use HasFactory;
    protected $table = 'customer';
    protected $fillable = [
        'Nama',
        'Email',
        'NoTelpon',
        'Password',

    ];

    protected $hidden = [
        'Password',
        'remember_token',
    ];

    public function cart()
    {
        return $this->hasMany(Cart::class);
    }
    public function order()
    {
        return $this->hasMany(Order::class);
    }
    public function review()
    {
        return $this->hasMany(Review::class);
    }
    
}
