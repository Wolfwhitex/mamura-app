<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class seller extends Model
{
    use HasFactory;
    protected $table = 'seller';
    protected $fillable = ['Nama','Email','Password','AdminID'];

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }
    public function datatoko()
    {
        return $this->hasMany(Datatoko::class);
    }
}
