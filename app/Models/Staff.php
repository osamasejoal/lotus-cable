<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    protected $guarded = [];

            


    /*
    |--------------------------------------------------------------------------
|                          RELATION WITH AREA TABLE
    |--------------------------------------------------------------------------
    */
    public function area()
    {
        return $this->belongsTo(Area::class);
    }

            


    /*
    |--------------------------------------------------------------------------
|                          RELATION WITH USER TABLE
    |--------------------------------------------------------------------------
    */
    public function user()
    {
        return $this->hasOne(User::class);
    }
}
