<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartModel extends Model
{
    use HasFactory;

    public function book(){
        return $this->belongsTo('App\Models\BookModel','book_id');
    }
    public function customer(){
        return $this->belongsTo('App\Models\CustomerModel','customer_id');
    }
}
