<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;

    protected $guarded = [];




    /*
    |--------------------------------------------------------------------------
    |                    RELATION WITH CUSTOMER TABLE
    |--------------------------------------------------------------------------
    */
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }




    /*
    |--------------------------------------------------------------------------
    |                    RELATION WITH AREA TABLE
    |--------------------------------------------------------------------------
    */
    public function area()
    {
        return $this->belongsTo(Area::class);
    }




    /*
    |--------------------------------------------------------------------------
    |                    RELATION WITH PACKAGE TABLE
    |--------------------------------------------------------------------------
    */
    public function package()
    {
        return $this->belongsTo(Package::class);
    }




    /*
    |--------------------------------------------------------------------------
    |                    RELATION WITH TRANSACTION TYPE TABLE
    |--------------------------------------------------------------------------
    */
    public function transactionType()
    {
        return $this->belongsTo(TransactionType::class);
    }
}
