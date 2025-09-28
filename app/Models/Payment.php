<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'payment';
    protected $primaryKey = 'paymentId';
    public $timestamps = false;

    protected $fillable = ['order_id', 'amount', 'paymentDate', 'method', 'receiptImage'];

    // Relasi
    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id', 'orderId');
    }
}
