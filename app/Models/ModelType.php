<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelType extends Model
{
    protected $table = 'modeltype';
    protected $primaryKey = 'modelTypeId';
    public $timestamps = false;

    protected $fillable = ['typeName', 'typePrice', 'estimatedDays'];

    // Relasi
    public function orders()
    {
        return $this->hasMany(Order::class, 'modelType_id', 'modelTypeId');
    }
}
