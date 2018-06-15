<?php

namespace App\Http\Controllers;

use App\Category;
use App\CategoryId;
use App\Dophangiai;
use App\Hang;
use App\Http\Requests\ProductRequest;
use App\Ktmh;
use App\Loaitivi;
use App\Product;
use App\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ProductController extends Controller
{
    public function getList(){
        $data=Product::paginate(6);
        return view('admin.product.index',compact('data'));
    }

    public function getAdd(){
        $hangs=Hang::all();
        $ktmhs=Ktmh::all();
        $dos=Dophangiai::all();
        $loaitivi=Loaitivi::all();
        $cate=Category::all();
        return view('admin.product.create',['hang'=>$hangs,'ktmh'=>$ktmhs,'dophangiai'=>$dos,'loaitivi'=>$loaitivi,'cate'=>$cate]);
    }

    public function postAdd(ProductRequest $request){
        $file_image=$request->file('avatar')->getClientOriginalName();

        $product= new Product();
        $product->TenSP=$request->txt_name;
        $product->slug=to_slug($request->txt_name);
        $product->Gia=$request->txt_price;
        $product->sale=$request->txt_discount;
        $product->KTMH_id=$request->sl_ktmh;
        $product->LoaiTivi_id=$request->sl_loaitivi;
        $product->Hang_id=$request->sl_hang;
        $product->Dophangiai_id=$request->sl_dophangiai;
        $product->soluong=$request->txt_number;
        $product->noidung=$request->txt_content;
        $product->active=$request->sl_active;
        $product->new=$request->sl_new;

        $product->anh=$file_image;

        $request->file('avatar')->move('upload/product',$file_image);
        $product->save();
        $id_sp = $product->id_sp;

        if($files=$request->file('anh')){
            foreach ($files as $file){
                $product_img=new ProductImage();
                $product_img->anh=$file->getClientOriginalName();
                $product_img->id_sp=$id_sp;
                $file->move('upload/product/image',$file->getClientOriginalName());
                $product_img->save();
            }
        }
        if($cates=$request->sl_category){
            foreach ($cates as $cate){
                $cate_id=new CategoryId();
                $cate_id->danhmuc_id=$cate;
                $cate_id->sp_id=$id_sp;
                $cate_id->save();
            }
        }
        return redirect()->route('admin.product.list')->with(['flash_message'=>'Thêm thành công']);
    }

    public function getDelete($id){
        $product= Product::find($id);
        $product->delete($id);
        return redirect()->route('admin.product.list')->with(['flash_message'=>'Xóa thành công']);
    }
}
