<?php

namespace App;

use App\Product;
use Illuminate\Database\Eloquent\Model;

class Formula extends Model
{
    //
    protected $fillable = ['period', 'price', 'product_id'];

    public function products()
    {
        return $this->belongsTo('App\Product', 'id');
    }
}