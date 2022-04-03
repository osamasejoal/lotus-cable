<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function areas()
    {
        return $this->belongsTo(Area::class);
    }

    public function packages()
    {
        return $this->belongsTo(Package::class);
    }

    public function users()
    {
        return $this->hasOne(User::class);
    }
}
