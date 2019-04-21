<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bidding extends Model
{
    public $table = 'bidding';
    public $primaryKey = 'id';
    public $fillable = ['SellerName', 'photo', 'name','startPrice','noOfBid','currentBid','bidDeadline'];
    public $dates = ['created_at', 'updated_at'];
}
