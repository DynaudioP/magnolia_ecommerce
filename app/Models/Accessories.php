<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Accessories extends Model
{
    protected $table = 'accessories';
    protected $primaryKey = 'accessoriesId';
    public $timestamps = false;

    protected $fillable = ['accessoriesName', 'accessoriesPrice'];

    // Relasi
    public function orders()
    {
        return $this->hasMany(Order::class, 'accessories_id', 'accessoriesId');
    }
}
