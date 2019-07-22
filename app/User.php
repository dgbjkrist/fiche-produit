<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Notifications\Notifiable;
// use Illuminate\Contracts\Auth\MustVerifyEmail;
// use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Model
{


    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tbl_users';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $guarded = ['user_id', '_token'];

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['email','password'];


    /**
    * The roles that belong to the Customer.
    */
    public function tbl_Customers()
    {
        return $this->hasMany('App\Customer');
    }
}