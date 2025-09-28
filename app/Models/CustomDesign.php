<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomDesign extends Model
{
    protected $table = 'customdesign';
    protected $primaryKey = 'designId';
    public $timestamps = false;

    protected $fillable = ['referenceImage', 'description'];

    // Relasi
    public function referenceImage()
    {
        return $this->belongsTo(ReferenceImage::class, 'referenceImage_id', 'referenceImageId');
    }
    public function orders()
    {
        return $this->hasMany(Order::class, 'design_id', 'designId');
    }
}
