<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    
    public function category(ProductCategory $productCategory){
        
        return view('products.categories',compact('category'));
    }
}
