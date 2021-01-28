<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Stproduct extends Model
{
    public function tproduct()
    {

        return $this->belongsTo(Product::class, 'tproduct_id', 'id');
    }
}
