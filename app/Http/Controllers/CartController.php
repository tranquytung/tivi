<?php

namespace App\Http\Controllers;

use App\Chitiet;
use App\Order;
use App\Product;
use App\Users;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Cart;
use Email;
use Illuminate\Support\Facades\Mail;

class CartController extends Controller
{
    public function getAddCart($id){
        $product=Product::find($id);

        Cart::add(['id'=> $id ,'name'=>$product->TenSP,'qty'=>1,'price'=>tinh_KM($product->Gia,$product->sale),
            'options' => ['img' => $product->anh]]);

        return redirect('cart/show');
        
    }

    public function getShowCart(){

        $value=session()->get('user');

        $data['items']=Cart::content();
        $data['total']=Cart::total();
        $khanhang=Users::Where('email','=',$value)->get();

        return view('frontend.cart',$data,['khanhang'=>$khanhang]);

    }

    public function getDeleteCart($id){
        Cart::remove($id);
        return redirect('cart/show');
    }

    public function getUpdateCart(Request $request){
        Cart::update($request->rowId,$request->qty);
    }

    public function postComplete(Request $request){

        $this->validate($request,
            [
                'name'=>'required',
                'email'=>'required|email',
                'diachi' => 'required'
            ],

            [
                'name.required'=>'Bạn không được để trống',
                'email.required'=>'Bạn không được để trống',
                'email.email' => 'Không đúng đinh dang email',
                'diachi.required' => 'Bạn không được để trống'
            ]);


        $cart=Cart::content();
        $order=new Order();
        $order->username=$request->name;
        $order->email=$request->email;
        $order->sdt=$request->sdt;
        $order->diachi=$request->diachi;
        $order->noidung=$request->noidung;

        $order->save();
        $id_donhang = $order->id;

        foreach ($cart as $value){
            $chitiet=new Chitiet();
            $chitiet->id_donhang=$id_donhang;
            $chitiet->id_sp=$value->id;
            $chitiet->number=$value->qty;
            $chitiet->gia=$value->price;
            $chitiet->save();
        }


        return redirect('complete');

        /*$data['info']=$request->all();
        $email=$request->email;
        $data['cart']=Cart::content();
        $data['total']=Cart::total();
        Mail::send('frontend.email',$data,function($message) use ($email){
            $message->from('tranquytung96@gmail.com','Trantung');

            $message->to($email,$email);

            $message->cc('tranquytung96@gmail.com','Tran Tung');

            $message->subject('Xac dinh mua hang cua max shop');
        });
        return redirect('complete');*/
    }

    public function getComplete(){
        return view('frontend.complete');
    }

}
