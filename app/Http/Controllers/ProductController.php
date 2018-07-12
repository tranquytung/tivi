<?php

namespace App\Http\Controllers;

use App\Category;
use App\CategoryId;
use App\Chitiet;
use App\Dophangiai;
use App\Hang;
use App\Http\Requests\ProductRequest;
use App\Ktmh;
use App\Loaitivi;
use App\Product;
use App\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;

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
        $product->noidung=$request->content;
        $product->active=$request->sl_active;
        $product->new=$request->sl_new;

        $product->anh=$file_image;

        $request->file('avatar')->move('upload/product',$file_image);
        $product->save();
        $id_sp = $product->id_sp;

        /*if($files=$request->file('anh')){
            foreach ($files as $file){
                $product_img=new ProductImage();
                $product_img->anh=$file->getClientOriginalName();
                $product_img->id_sp=$id_sp;
                $file->move('upload/product/image',$file->getClientOriginalName());
                $product_img->save();
            }
        }*/
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
        /*$chitiet=Chitiet::where('id_sp','=',$id);
        if($chitiet){
            return redirect()->route('admin.product.list')->with(['flash_message'=>'Sản phẩm này tồn tại hóa dớn']);
        }else{*/
            $product= Product::find($id);
            $product->delete($id);
            return redirect()->route('admin.product.list')->with(['flash_message'=>'Xóa thành công']);
        /*}*/
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getEdit($id){
        $hangs=Hang::all();
        $ktmhs=Ktmh::all();
        $dos=Dophangiai::all();
        $loaitivi=Loaitivi::all();

        $data = DB::table('tbl_sanpham')
            ->join('tbl_hang','tbl_sanpham.Hang_id','=','tbl_hang.id')
            ->join('tbl_ktmh','tbl_sanpham.KTMH_id','=','tbl_ktmh.id')
            ->join('tbl_loaitivi','tbl_sanpham.LoaiTivi_id','=','tbl_loaitivi.id')
            ->join('tbl_dophangiai','tbl_sanpham.Dophangiai_id','=','tbl_dophangiai.id')
            ->where('id_sp', $id)
            ->get();
        return view('admin.product.edit',['data' => $data,'hang'=>$hangs,'ktmhs'=>$ktmhs,'dophangiai'=>$dos,'loaitivi'=>$loaitivi]);
    }

    public function postEdit(Request $request,$id){

        $file_image=$request->file('avatar')->getClientOriginalName();

        $sanpham=Product::find($id);
        $sanpham->TenSP=$request->txt_name;
        $sanpham->slug=$request->txt_slug;
        $sanpham->Gia=$request->txt_price;
        $sanpham->sale=$request->txt_discount;
        $sanpham->soluong=$request->txt_number;
        $sanpham->Hang_id=$request->sl_hang;
        $sanpham->KTMH_id=$request->sl_ktmh;
        $sanpham->LoaiTivi_id=$request->sl_loaitivi;
        $sanpham->Dophangiai_id=$request->sl_adphangiai;
        $sanpham->new=$request->sl_new;
        $sanpham->active=$request->sl_active;
        $sanpham->noidung=$request->txt_content;

        $sanpham->anh=$file_image;
        $request->file('avatar')->move('upload/product',$file_image);

        $sanpham->save();
        return redirect()->route('admin.product.list')->with(['flash_message'=>'Cập nhật thành công']);
    }
}
