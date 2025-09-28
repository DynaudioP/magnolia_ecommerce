<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShippingMethode extends Model
{
    protected $table = 'shippingmethod';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['methodName'];

    // Relasi
    public function orders()
    {
        return $this->hasMany(Order::class, 'shippingMethod_id', 'id');
    }
}
