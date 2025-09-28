<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Customer extends Authenticatable
{
    protected $table = 'customer';
    protected $primaryKey = 'customerId';
    public $timestamps = false;

    protected $fillable = [
        'username',
        'email',
        'password',
        'address',
        'phone',
    ];

    public function orders()
    {
        return $this->hasMany(Order::class, 'customer_id', 'customerId');
    }

    // 🔗 Relasi ke Testimonial
    public function testimonials()
    {
        return $this->hasMany(Testimonial::class, 'customer_id', 'customerId');
    }
}
