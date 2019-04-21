<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $table = 'products';
    public $primaryKey = 'id';
    public $fillable = ['photo', 'name', 'SellerName','description','state','startprice','sold'];
    public $dates = ['created_at', 'updated_at'];
}
