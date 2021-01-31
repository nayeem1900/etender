<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Tproduct extends Model
{
 public function tproduct(){

     return $this->belongsTo(TProduct::class, 'tproduct_id', 'id');

 }
}
