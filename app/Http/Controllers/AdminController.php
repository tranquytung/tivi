<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Http\Requests\AdminRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function showLogin(){
        return view('admin.quanli.login');
    }

    public function postLogin(Request $request){
        $email=$request->txt_email;
        $pass=$request->pass;

        $check = Auth::guard('admin')->attempt(['email'=>$email,'password'=>$pass]);

        dd($check);
        if($check){

            return redirect()->route('admin.quanli.list');
        }else{
            return redirect()->route('admin.login');
        }

    }

    public function getList(){
        $data=Admin::paginate(6);
        return view('admin.quanli.index',compact('data'));
    }
    public function getAdd(){
        return view('admin.quanli.create');
    }
    public function postAdd(AdminRequest $request){
        $admin= new Admin();
        $admin->name=$request->txt_name;
        $admin->email=$request->txt_email;
        $admin->diachi=$request->txt_diachi;
        $admin->sdt=$request->txt_sdt;
        $admin->password=bcrypt($request->txt_pass);
        $admin->save();
        return redirect()->route('admin.quanli.list')->with(['flash_message'=>'Thêm thành công']);
    }

    public function getDelete($id){
        $admin= Admin::find($id);
        $admin->delete($id);
        return redirect()->route('admin.quanli.list')->with(['flash_message'=>'Xóa thành công']);
    }

    public function getEdit($id){
        $data=Admin::find($id)->toArray();
        return view('admin.quanli.edit',compact('data'));
    }

    public function postEdit(Request $request, $id){
        $this->validate($request,
            ['txt_name'=>'required'],
            ['txt_name.required'=>'Bạn không được để trống tên admin'],
            ['txt_email' => 'required' ],
            ['txt_email.required'=>'Bạn không được để trống mật khẩu'],
            ['txt_pass' => 'required' ],
            ['txt_pass.required'=>'Bạn không được để trống mật khẩu']);

        $admin= Admin::find($id);
        $admin->name=$request->txt_name;
        $admin->email=$request->txt_email;
        $admin->diachi=$request->txt_diachi;
        $admin->sdt=$request->txt_sdt;
        $admin->password=bcrypt($request->txt_pass);
        $admin->save();
        return redirect()->route('admin.quanli.list')->with(['flash_message'=>'Cập nhật thành công']);
    }
    public function postSearch(Request $request){
        $tukhoa=$request->tukhoa;
        $data=Admin::where('name','like',"%$tukhoa%")->paginate(6);
        return view('admin.quanli.index',compact('data'));
    }
}
