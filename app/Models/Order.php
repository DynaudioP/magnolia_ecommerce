<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'order';
    protected $primaryKey = 'orderId';
    public $timestamps = false;
    protected $fillable = [
        'customer_id',
        'status_id',
        'orderDate',
        'totalItem',
        'totalPrice',
        'estimatedDate',
        'shippingMethod_id'
    ];
    // Relasi
    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id', 'customerId');
    }
    public function orderItem()
    {
        return $this->hasMany(OrderItem::class, 'order_id', 'orderId');
    }
    public function status()
    {
        return $this->belongsTo(Status::class, 'status_id', 'statusId');
    }
    public function shippingMethod()
    {
        return $this->belongsTo(ShippingMethode::class, 'shippingMethod_id', 'shippingMethodId');
    }
    public function payment()
    {
        return $this->hasOne(Payment::class, 'order_id', 'orderId');
    }
    public function testimonials()
    {
        return $this->hasMany(Testimonial::class, 'order_id', 'orderId');
    }
}
