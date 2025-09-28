<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Technique extends Model
{
    protected $table = 'technique';
    protected $primaryKey = 'techniqueId';
    public $timestamps = false;

    protected $fillable = ['techniqueName'];

    // Relasi
    public function products()
    {
        return $this->hasMany(Product::class, 'technique_id', 'techniqueId');
    }
}
