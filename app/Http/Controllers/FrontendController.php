<?php

namespace App\Http\Controllers;

use App\Category;
use App\CategoryId;
use App\Hang;
use App\Product;
use App\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class FrontendController extends Controller
{
    /*public function getHome(){
        $data['pay'] =Product::orderBy('pay','desc')->take(8)->get();
        $data['new'] =Product::where('new',1)->orderBy('id_sp','desc')->take(8)->get();
        return view('frontend.home',$data);
    }*/

    public function getHome(){
        $pay= DB::table('tbl_sanpham')
                    ->join('tbl_hang','tbl_sanpham.Hang_id','=','tbl_hang.id')
                    ->join('tbl_ktmh','tbl_sanpham.KTMH_id','=','tbl_ktmh.id')
                    ->join('tbl_loaitivi','tbl_sanpham.LoaiTivi_id','=','tbl_loaitivi.id')
                    ->join('tbl_dophangiai','tbl_sanpham.Dophangiai_id','=','tbl_dophangiai.id')
                    ->orderBy('pay','desc')->take(8)
                    ->get();


        $new = DB::table('tbl_sanpham')
                    ->join('tbl_hang','tbl_sanpham.Hang_id','=','tbl_hang.id')
                    ->join('tbl_ktmh','tbl_sanpham.KTMH_id','=','tbl_ktmh.id')
                    ->join('tbl_loaitivi','tbl_sanpham.LoaiTivi_id','=','tbl_loaitivi.id')
                    ->join('tbl_dophangiai','tbl_sanpham.Dophangiai_id','=','tbl_dophangiai.id')
                    ->where('new',1)
                    ->orderBy('id_sp','desc')->take(8)
                    ->get();

        return view('frontend.home',['pay' => $pay, 'new'=> $new]);
    }

    public function getProduct($id){
        /*san pham thuoc nhieu danh muc*/
        $category = Category::find($id);
        $data['products'] = $category->products;

        return view('frontend.product',$data);
    }


    public function getDetail($id){
        $data = DB::table('tbl_sanpham')
            ->join('tbl_hang','tbl_sanpham.Hang_id','=','tbl_hang.id')
            ->join('tbl_ktmh','tbl_sanpham.KTMH_id','=','tbl_ktmh.id')
            ->join('tbl_loaitivi','tbl_sanpham.LoaiTivi_id','=','tbl_loaitivi.id')
            ->join('tbl_dophangiai','tbl_sanpham.Dophangiai_id','=','tbl_dophangiai.id')
            ->where('id_sp',$id)
            ->get();

        return view('frontend.detail',['detail'=>$data]);
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


    public function getLogin(){
        return view('frontend.login');
    }

    public function postLogin(Request $request){
        $this->validate($request,
            [
                'txt_email'=>'required',
                'txt_pass'=>'required'
            ],

            [
                'txt_email.required'=>'Bạn không được để trống',
                'txt_pass.required'=>'Bạn không được để trống'
            ]);

        $email=$request->txt_email;
        $pass=$request->txt_pass;

        $check = Auth::guard('user1')->attempt(['email'=>$email,'password'=>$pass]);

        if($check){

            return redirect()->route('home');
            Request::session()->put('login', true);
            Request::session()->put('name',$email);
        }else{
            return redirect()->route('login');
        }

    }

    public function getDangKy(){
        return view('frontend.dangky');
    }
    public function postDangKy(Request $request){
        $this->validate($request,
            [
                'txt_name'=>'required',
                'txt_email'=>'required|email',
                'txt_sdt' => 'required',
                'txt_password'=>'required'
            ],

            [
                'txt_name.required'=>'Bạn không được để trống',
                'txt_email.required'=>'Bạn không được để trống',
                'txt_email.email' => 'Không đúng đinh dang email',
                'txt_sdt.required' => 'Bạn không được để trống',
                'txt_password.required'=>'Bạn không được để trống'
            ]);
        $user=new Users();
        $user->username = $request->txt_name;
        $user->email = $request->txt_email;
        $user->password = bcrypt($request->txt_password);
        $user->sdt=$request->txt_sdt;
        $user->diachi=$request->txt_diachi;

        $user->save();

        return redirect()->route('login');
    }
}
