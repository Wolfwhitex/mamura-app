<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    use HasFactory;
    protected $table = 'order';
    protected $fillable = ['OrderID','Amount','AdminID'];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }
}
