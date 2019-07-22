<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{

  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'tbl_Customers';

  /**
  * The database primary key value.
  *
  * @var string
  */
  protected $guarded = ['customer_id', '_token'];

  /**
   * Attributes that should be mass-assignable.
   *
   * @var array
   */
  protected $fillable = [
      'fname', 'lname','mname','contact_no','gender','user_id','birthdate'
  ];

  /**
   * The roles that belong to the User.
   */
  public function tbl_users()
  {
    return $this->belongsTo('App\User', 'user_id');
  }
}
