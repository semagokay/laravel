<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $guarded = ['id'];
    
    function exercise() {
        return $this->belongsTo(Exercise::class);   //Activity nin 1 exercise i var
    }

    function customer() {
        return $this->belongsTo(Customer::class);  //Activity nin 1 customer ı var
    }
}
