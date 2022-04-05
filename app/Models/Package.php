<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    protected $guarded = [];

            


    /*
    |--------------------------------------------------------------------------
|                          RELATION WITH CUSTOMER TABLE
    |--------------------------------------------------------------------------
    */
    public function customers()
    {
        return $this->hasOne(Customer::class);
    }
}
