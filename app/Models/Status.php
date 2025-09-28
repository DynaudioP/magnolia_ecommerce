<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table = 'status';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['statusName'];

    // Relasi
    public function orders()
    {
        return $this->hasMany(Order::class, 'status_id', 'id');
    }
}
