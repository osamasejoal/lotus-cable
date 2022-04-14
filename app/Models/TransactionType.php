<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionType extends Model
{
    use HasFactory;

    protected $guarded = [];




    /*
    |--------------------------------------------------------------------------
    |                         RELATION WITH BILL TABLE
    |--------------------------------------------------------------------------
    */
    public function bill()
    {
        return $this->hasOne(Bill::class);
    }
}
