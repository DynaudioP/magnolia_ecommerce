<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $table = 'material';
    protected $primaryKey = 'materialId';
    public $timestamps = false;

    protected $fillable = ['materialName'];

    // Relasi
    public function products()
    {
        return $this->hasMany(Product::class, 'material_id', 'materialId');
    }
}
