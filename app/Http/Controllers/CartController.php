<?php

namespace App\Http\Controllers;

use App\Chitiet;
use App\Order;
use App\Product;
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

        $this->validate($request,
            [
                'email'=>'required|email',
                'sdt'=>'required|number',
                'diachi'=>'required'
            ],

            [
                'email.required'=>'Bạn không được để trống',
                'email.email'=>'Email Không dung dinh dang',
                'sdt.required'=>'Bạn không được để trống',
                'sdt.number'=>'Bạn phải nhập số',
                'diachi.required'=>'Bạn không được để trống'
            ]);

        $tongtien=Cart::total();

        $cart=Cart::content();

        $order=new Order();
        $order->username=$request->name;
        $order->email=$request->name;
        $order->sdt=$request->sdt;
        $order->diachi=$request->diachi;
        $order->noidung=$request->noidung;
        $order->tongtien=$request->$tongtien;

        $order->save();
        $id_donhang = $order->id;

        foreach ($cart as $value){
            $chitiet=new Chitiet();
            $chitiet->id_donhang=$id_donhang;
            $chitiet->id_sp=$value->id;
            $chitiet->soluong=$value->qty;
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
