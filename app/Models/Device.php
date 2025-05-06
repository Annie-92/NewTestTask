<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Device extends Model
{
    use HasFactory;


    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }

    public function engineeringContact()
    {
        return $this->hasOne(EngineeringContact::class);
    }

    public function product()
    {
        return $this->hasOne(Product::class);
    }
}
