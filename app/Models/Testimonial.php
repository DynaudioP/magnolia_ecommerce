<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $table = 'testimonial';
    protected $primaryKey = 'testimonialId';
    public $timestamps = false;

    const CREATED_AT = 'created_at';
    const UPDATED_AT = null;

    protected $fillable = ['customer_id', 'product_id', 'order_id', 'imageUrl', 'description', 'created_at'];

    // Relasi
    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id', 'customerId');
    }
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'productId');
    }
    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id', 'orderId');
    }
}
