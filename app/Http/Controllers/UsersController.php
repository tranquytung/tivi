<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsersRequest;
use App\Users;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\DocBlock\Tags\Uses;

class UsersController extends Controller
{
    public function getList(){
        $data=Users::all();
        return view('admin.users.index',compact('data'));
    }
    public function getAdd(){
        return view('admin.users.create');
    }
    public function postAdd(UsersRequest $request){
        $users= new Users();
        $users->username=$request->txt_name;
        $users->email=$request->txt_email;
        $users->password=bcrypt($request->txt_pass);
        $users->sdt=$request->txt_sdt;
        $users->diachi=$request->txt_diachi;
        $users->save();
        return redirect()->route('admin.users.list')->with(['flash_message'=>'Thêm thành công']);
    }

    public function getDelete($id){
        $users= Users::find($id);
        $users->delete($id);
        return redirect()->route('admin.users.list')->with(['flash_message'=>'Xóa thành công']);
    }

    public function getEdit($id){
        $data=Users::find($id)->toArray();
        return view('admin.users.edit',compact('data'));
    }

    public function postEdit(Request $request, $id){
        $this->validate($request,
            ['txt_name'=>'required'],
            ['txt_name.required'=>'Bạn không được để trống tên admin'],
            ['txt_email' => 'required' ],
            ['txt_email.required'=>'Bạn không được để trống mật khẩu'],
            ['txt_pass' => 'required' ],
            ['txt_pass.required'=>'Bạn không được để trống mật khẩu']);

        $users= Users::find($id);
        $users->username=$request->txt_name;
        $users->email=$request->txt_email;
        $users->diachi=$request->txt_diachi;
        $users->sdt=$request->txt_sdt;
        $users->password=bcrypt($request->txt_pass);
        $users->save();
        return redirect()->route('admin.users.list')->with(['flash_message'=>'Cập nhật thành công']);
    }
    public function postSearch(Request $request){
        $tukhoa=$request->tukhoa;
        $data=Users::where('name','like',"%$tukhoa%")->paginate(6);
        return view('admin.users.index',compact('data'));
    }
}
