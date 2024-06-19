<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Seller extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    // Definisikan kolom yang bisa diisi secara massal
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

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }
    public function datatoko()
    {
        return $this->hasMany(Datatoko::class);
    }    
}
