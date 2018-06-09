<?php

namespace App\Http\Controllers;

use App\Category;
use App\CategoryId;
use App\Product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function getHome(){
        $new =Product::get();
        return view('frontend.home',['new'=>$new]);
    }
    public function getProduct($id){
        $category = Category::find($id);

        $products = $category->products;

        return view('frontend.product', ['products' => $products]);
    }

//    public function getProduct($id){
//        $id_danhmuc=Category::where('id',$id)->get();
//        $id_hang=CategoryId::where('danhmuc_id',$id_danhmuc);
//
//        return view('frontend.product');
//    }

    public function getChitietSP(){
        return view('frontend.singeproduct');
    }

    public function getCart(){
        return view('frontend.cart');
    }
}
