<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bidder extends Model
{
    public $table = 'bidders';
    public $primaryKey = 'id';
    public $fillable = ['firstname', 'lasttname', 'email','address','phone','password','email_verified_at'];
    public $hidden = ['password' , 'remember_token'];
    public $dates = ['created_at', 'updated_at'];


    public function Bidding()
    {
        return $this->belongsTo('App\Bidding');
    }
    public function Products(){
        return $this->hasMany('App\Product');
    }
    public function  Payment_method(){
        return $this->hasMany('Bidder');
    }




}
