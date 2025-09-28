<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $table = 'orderitem';
    protected $primaryKey = 'itemId';
    public $timestamps = false;

    protected $fillable = ['product_id', 'quantity', 'unitPrice'];

    // Relasi
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'productId');
    }
    public function order()
    {
        return $this->hasOne(Order::class, 'item_id', 'itemId');
    }
}
