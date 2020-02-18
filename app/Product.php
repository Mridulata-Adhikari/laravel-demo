<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $guarded = [];

    public function product_category(){

        return $this->belongsTo('App\ProductCategory','category_id');
    }
    
}
