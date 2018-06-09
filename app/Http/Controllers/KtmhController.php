<?php

namespace App\Http\Controllers;

use App\Http\Requests\KtmhRequest;
use App\Ktmh;
use Illuminate\Http\Request;

class KtmhController extends Controller
{
    public function getList(){
        $data=Ktmh::paginate(6);
        return view('admin.ktmh.index',compact('data'));
    }
    public function getAdd(){
        return view('admin.ktmh.create');
    }
    public function postAdd(KtmhRequest $request){
        $ktmh=new Ktmh();
        $ktmh->kichthuoc=$request->txt_ktmh;
        $ktmh->save();
        return redirect()->route('admin.ktmh.list')->with(['flash_message'=>'Thêm thành công']);
    }

    public function getDelete($id){
        $ktmh=Ktmh::find($id);
        $ktmh->delete($id);
        return redirect()->route('admin.ktmh.list')->with(['flash_message'=>'Xóa thành công']);
    }

    public function getEdit($id){
        $data= Ktmh::find($id)->toArray();
        return view('admin.ktmh.edit',compact('data'));
    }

    public function postEdit(Request $request, $id){
        $this->validate($request,
            ['txt_ktmh'=>'required'],
            ['txt_ktmh.required'=>'Bạn không được để trống']);
        $ktmh=Ktmh::find($id);
        $ktmh->kichthuoc=$request->txt_ktmh;
        $ktmh->save();
        return redirect()->route('admin.ktmh.list')->with(['flash_message'=>'Cập nhật thành công']);
    }

    public function postSearch(Request $request){
        $tukhoa=$request->tukhoa;
        $data=Ktmh::where('kichthuoc','like',"%$tukhoa%")->paginate(6);
        return view('admin.ktmh.index',compact('data'));
    }
}
