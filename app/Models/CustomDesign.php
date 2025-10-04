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
        return $this->hasOne(ReferenceImage::class, 'design_id', 'designId');
    }
    public function orderItem()
    {
        return $this->belongsTo(OrderItem::class, 'item_id', 'itemId');
    }
}
