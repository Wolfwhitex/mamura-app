<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    use HasFactory;
    protected $table = 'admin';
    protected $fillable = ['Nama','Email','Password'];

    public function seller()
    {
        return $this->hasMany(Seller::class);
    }
}
