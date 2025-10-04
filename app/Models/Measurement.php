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
    public function orderItem()
    {
        return $this->belongsTo(OrderItem::class, 'item_id', 'itemId');
    }
}
