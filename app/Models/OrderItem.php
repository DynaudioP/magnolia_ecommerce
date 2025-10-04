<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $table = 'orderitem';
    protected $primaryKey = 'itemId';
    public $timestamps = false;

    protected $fillable = [
        'order_id',
        'product_id',
        'quantity',
        'unitPrice',
        'subtotal',
        'modelType_id',
        'liningOption_id',
        'accessories_id',
        'measurement_id',
        'design_id',
    ];

    // Relasi
    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id', 'orderId');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'productId');
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

    public function measurement()
    {
        return $this->belongsTo(Measurement::class, 'measurement_id', 'measurementId');
    }

    public function customDesign()
    {
        return $this->belongsTo(CustomDesign::class, 'design_id', 'designId');
    }
}
