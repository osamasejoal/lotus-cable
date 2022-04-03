<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function staffs()
    {
        return $this->hasOne(Staff::class);
    }

    public function customers()
    {
        return $this->hasOne(Customer::class);
    }
}
