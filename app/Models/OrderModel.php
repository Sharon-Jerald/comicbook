<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderModel extends Model
{
    use HasFactory;

    public function book(){
        return $this->belongsTo('App\Models\BookModel','proid');
    }
    public function customer(){
        return $this->belongsTo('App\Models\CustomerModel','cid');
    }
}
