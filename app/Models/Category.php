<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';
    protected $primaryKey = 'categoryId';
    public $timestamps = false;

    protected $fillable = ['categoryName', 'description'];

    public function products()
    {
        return $this->hasMany(Product::class, 'category_id', 'categoryId');
    }
}
