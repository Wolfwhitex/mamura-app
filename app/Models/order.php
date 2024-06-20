<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;
    protected $table = 'order';
    protected $fillable = ['CustomerID','OrderDate','TotalAmount','TokoID'];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
    public function datatoko()
    {
        return $this->belongsTo(Datatoko::class);
    }
    public function payment()
    {
        return $this->hasMany(Payment::class);
    }
}
