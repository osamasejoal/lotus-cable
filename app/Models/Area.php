<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;

    protected $guarded = [];




    /*
    |--------------------------------------------------------------------------
|                          RELATION WITH STAFF TABLE
    |--------------------------------------------------------------------------
    */
    public function staff()
    {
        return $this->hasOne(Staff::class);
    }




    /*
    |--------------------------------------------------------------------------
|                          RELATION WITH CUSTOMER TABLE
    |--------------------------------------------------------------------------
    */
    public function customer()
    {
        return $this->hasOne(Customer::class);
    }
}
