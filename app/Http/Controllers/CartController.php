<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Cart;
use Email;

class CartController extends Controller
{
    public function getAddCart($id){
        $product=Product::find($id);

        Cart::add(['id'=> $id ,'name'=>$product->TenSP,'qty'=>1,'price'=>tinh_KM($product->Gia,$product->sale),
            'options' => ['img' => $product->anh]]);

        return redirect('cart/show');
        
    }

    public function getShowCart(){
        $data['items']=Cart::content();
        $data['total']=Cart::total();
        return view('frontend.cart',$data);
    }

    public function getDeleteCart($id){
        Cart::remove($id);
        return redirect('cart/show');
    }

    public function getUpdateCart(Request $request){
        Cart::update($request->rowId,$request->qty);
    }

    public function postComplete(Request $request){
        $data=$request->all();
        dd($data);
    }
}
