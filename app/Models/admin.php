<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $table = 'Admin';
    protected $fillable = ['Nama','Email','Password'];

    protected $hidden = [
        'Password',
        'remember_token',
    ];

    public function seller()
    {
        return $this->hasMany(Seller::class);
    }
    public function payment()
    {
        return $this->hasMany(Payment::class);
    }
}
