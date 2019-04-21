<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_Sold extends Model
{
    public $table = 'products_sold';
    public $primaryKey = 'id';
    public $fillable = ['name', 'maxPrice', 'SellerName','bidderName'];
    public $dates = ['created_at', 'updated_at'];
}
