<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    protected $table = 'productimage';
    protected $primaryKey = 'productImageId';
    public $timestamps = false;
    protected $fillable = ['prodImage', 'product_id'];

    // Relasi
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'productId');
    }
}
