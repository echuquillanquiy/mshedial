<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function medical()
    {
        return $this->hasOne(Medical::class);
    }

    public function nurse()
    {
        return $this->hasMany(Nurse::class);
    }

    public function treatment()
    {
        return $this->hasMany(Treatment::class);
    }
}
