<?php

namespace App\Models;

use App\Models\CustomerModel;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestbookModel extends Model
{
    use HasFactory;

  public function customer(){
      return $this->belongsTo('App\Models\CustomerModel','cid');
  }
}
