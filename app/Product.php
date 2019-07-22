<?php

namespace App;

use App\Formula;
use App\Name;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = ['nom_produit', 'cible', 'prime_annuelle', 'periode_carence'];

    public function formulas()
    {
        return $this->hasMany('App\Formula');
    }

    public function names()
    {
        return $this->hasMany('App\Name');
    }
}
