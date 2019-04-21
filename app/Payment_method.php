<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment_method extends Model
{
    public $table = 'payment_method';
    public $primaryKey = 'id';
    public $fillable = ['paymentCode', 'payment_Method_Describtion'];
    public $dates = ['created_at', 'updated_at'];
}
