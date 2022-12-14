<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Treatment extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function order()
    {
        $this->belongsTo(Order::class);
    }

    public function patient()
    {
        $this->belongsTo(Patient::class);
    }
}
