<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LiningOption extends Model
{
    protected $table = 'liningoption';
    protected $primaryKey = 'liningOptionId';
    public $timestamps = false;

    protected $fillable = ['optionName', 'optionPrice'];

    // Relasi
    public function orders()
    {
        return $this->hasMany(Order::class, 'liningOption_id', 'liningOptionId');
    }
}
