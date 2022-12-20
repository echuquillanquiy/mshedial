<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function module()
    {
        return $this->belongsTo(Module::class);
    }

    public function session()
    {
        return $this->belongsTo(Session::class);
    }

    public function nurse()
    {
        return $this->hasOne(Nurse::class)->withDefault();
    }

    public function medical()
    {
        return $this->hasOne(Medical::class)->withDefault();
    }
    public function treatment()
    {
        return $this->hasOne(Treatment::class)->withDefault();
    }

}
