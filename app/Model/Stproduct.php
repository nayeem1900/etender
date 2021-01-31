<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Stproduct extends Model
{
    public function tproduct()
    {

        return $this->belongsTo(TProduct::class, 'tproduct_id', 'id');
    }

    public function stproduct()
    {

        return $this->belongsTo(Stproduct::class, 'stproduct_id', 'id');
    }



}
