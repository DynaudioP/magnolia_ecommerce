<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReferenceImage extends Model
{
    protected $table = 'referenceimage';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['refImage'];

    // Relasi
    public function customDesign()
    {
        return $this->hasOne(CustomDesign::class, 'referenceImage_id', 'id');
    }
}
