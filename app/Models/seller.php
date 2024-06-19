<?php

namespace App\Models;


use App\Models\Datatoko;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Seller extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    // Sembunyikan kolom tertentu saat model diubah menjadi array atau JSON
    protected $hidden = [
        'password',
        'remember_token',
    ];

    // Menentukan kolom yang harus di-cast ke tipe data tertentu
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function Admin()
    {
        return $this->belongsTo(Admin::class);
    }
    public function Datatoko()
    {
        return $this->hasMany(Datatoko::class);
    }    
}
