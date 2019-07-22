<?php

namespace App;

use App\Product;
use Illuminate\Database\Eloquent\Model;

class Guarantee extends Model
{
    //
    protected $fillable = ['dommages_couverts', 'guarantee_offerte', 'moyen_preuve', 'product_id'];

    public function products()
    {
        return $this->belongsTo('App\Product', 'id');
    }
}