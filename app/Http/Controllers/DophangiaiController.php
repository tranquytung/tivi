<?php

namespace App\Http\Controllers;

use App\Dophangiai;
use App\Http\Requests\DophangiaiRequest;
use Illuminate\Http\Request;

class DophangiaiController extends Controller
{
    public function getList(){
        $data=Dophangiai::paginate(6);
        return view('admin.dophangiai.index',compact('data'));
    }

    public function getAdd(){
        return view('admin.dophangiai.create');
    }

    public function postAdd(DophangiaiRequest $request){
        $dophangiai= new Dophangiai();
        $dophangiai->dophangiai=$request->txt_dophangiai;
        $dophangiai->save();
        return redirect()->route('admin.dophangiai.list')->with(['flash_message'=>'Thêm thành công']);
    }

    public function getDelete($id){
        $dophangiai= Dophangiai::find($id);
        $dophangiai->delete($id);
        return redirect()->route('admin.dophangiai.list')->with(['flash_message'=>'Xóa thành công']);
    }

    public function getEdit($id){
        $data=Dophangiai::find($id)->toArray();
        return view('admin.dophangiai.edit',compact('data'));
    }

    public function postEdit(Request $request,$id){
        $this->validate($request,
            ['txt_dophangiai'=>'required'],
            ['txt_dophangiai.required'=>'Bạn không được để trống trường này']);
        $dophangiai=Dophangiai::find($id);
        $dophangiai->dophangiai=$request->txt_dophangiai;
        $dophangiai->save();
        return redirect()->route('admin.dophangiai.list')->with(['flash_message'=>'Cập nhật thành công']);
    }
    public function postSearch(Request $request){
        $tukhoa=$request->tukhoa;
        $data=Loaitivi::where('dophangiai','like',"%$tukhoa%")->paginate(6);
        return view('admin.dophangiai.index',compact('data'));
    }
}
