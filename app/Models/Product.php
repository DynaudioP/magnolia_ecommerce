<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';
    protected $primaryKey = 'productId';
    public $timestamps = false;

    protected $fillable = [
        'productName',
        'category_id',
        'fabricSize',
        'technique_id',
        'material_id',
        'price',
        'stockQuantity'
        
    ];

    // Relasi
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'categoryId');
    }
    public function technique()
    {
        return $this->belongsTo(Technique::class, 'technique_id', 'techniqueId');
    }
    public function material()
    {
        return $this->belongsTo(Material::class, 'material_id', 'materialId');
    }
    public function images()
    {
        return $this->hasMany(ProductImage::class, 'product_id', 'productId');
    }
    public function testimonials()
    {
        return $this->hasMany(Testimonial::class, 'product_id', 'productId');
    }

    public function orderItem()
{
    return $this->hasMany(OrderItem::class, 'product_id', 'productId');
}
}
