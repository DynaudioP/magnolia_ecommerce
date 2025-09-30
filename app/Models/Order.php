<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'order';
    protected $primaryKey = 'orderId';
    public $timestamps = false;

    protected $fillable = ['customer_id', 'item_id', 'design_id', 'measurement_id', 'orderDate', 'modelType_id', 'liningOption_id', 'accessories_id', 'status_id', 'totalItem', 'totalPrice', 'estimatedDate', 'shippingMethod_id'];

    // Relasi
    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id', 'customerId');
    }
    public function item()
    {
        return $this->belongsTo(OrderItem::class, 'item_id', 'itemId');
    }
    public function design()
    {
        return $this->belongsTo(CustomDesign::class, 'design_id', 'designId');
    }
    public function measurement()
    {
        return $this->belongsTo(Measurement::class, 'measurement_id', 'measurementId');
    }
    public function modelType()
    {
        return $this->belongsTo(ModelType::class, 'modelType_id', 'modelTypeId');
    }
    public function liningOption()
    {
        return $this->belongsTo(LiningOption::class, 'liningOption_id', 'liningOptionId');
    }
    public function accessories()
    {
        return $this->belongsTo(Accessories::class, 'accessories_id', 'accessoriesId');
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
