<?php

namespace App;

use App\Product;
use Illuminate\Database\Eloquent\Model;

class Name extends Model
{
    //
    protected $fillable = ['dommages_couverts', 'garantie_offerte', 'product_id'];

    public function products()
    {
        return $this->belongsTo('App\Product', 'id');
    }
}
