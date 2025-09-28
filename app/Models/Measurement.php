<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Measurement extends Model
{
    protected $table = 'measurement';
    protected $primaryKey = 'measurementId';
    public $timestamps = false;

    protected $guarded = []; 

    
    // Relasi
    public function orders() { return $this->hasMany(Order::class, 'measurement_id', 'measurementId'); }
}
