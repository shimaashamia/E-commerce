<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    public $table = 'sellers';
    public $primaryKey = 'id';
    public $fillable = ['firstname', 'lasttname', 'email','address','phone','password','bidders-Credit-Details'];
    public $hidden = ['password' , 'remember_token'];
    public $dates = ['created_at', 'updated_at'];
}
