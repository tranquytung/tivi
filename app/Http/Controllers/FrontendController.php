<?php

namespace App\Http\Controllers;

use App\Category;
use App\CategoryId;
use App\Hang;
use App\Product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function getHome(){
        $data['pay'] =Product::orderBy('pay','desc')->take(8)->get();
        $data['new'] =Product::where('new',1)->orderBy('id_sp','desc')->take(8)->get();
        return view('frontend.home',$data);
    }
    public function getProduct($id){
        /*san pham thuoc nhieu danh muc*/
        $category = Category::find($id);
        $data['products'] = $category->products;

        return view('frontend.product',$data);
    }


    public function getDetail(){
        return view('frontend.detail');
    }

    public function getCart(){
        return view('frontend.cart');
    }

    public function getSearch(Request $request){
        $result=$request->txt_search;
        $data['keyword']=$result;
        $result=str_replace(' ', '%',$result);
        $data['items']=Product::where('TenSP','like','%'.$result.'%')->paginate(9);
        return view('frontend.search',$data);
    }
}
