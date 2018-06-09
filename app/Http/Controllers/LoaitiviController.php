<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoaitiviRequest;
use Validator;
use App\Ktmh;
use App\Loaitivi;
use Illuminate\Http\Request;

class LoaitiviController extends Controller
{
    public function getList(){
        $data=Loaitivi::paginate(6);
        return view('admin.loaitivi.index',compact('data'));
    }

    public function getAdd(){
        return view('admin.loaitivi.create');
    }

    public function postAdd(LoaitiviRequest $request){
        $loativi= new Loaitivi();
        $loativi->loaitivi=$request->txt_loaitivi;
        $loativi->save();
        return redirect()->route('admin.loaitivi.list')->with(['flash_message'=>'Thêm thành công']);
    }

    public function getDelete($id){
        $loaitivi= Loaitivi::find($id);
        $loaitivi->delete($id);
        return redirect()->route('admin.loaitivi.list')->with(['flash_message'=>'Xóa thành công']);
    }

    public function getEdit($id){
        $data=Loaitivi::find($id)->toArray();
        return view('admin.loaitivi.edit',compact('data'));
    }

    public function postEdit(Request $request,$id){
        $this->validate($request,
            ['txt_loaitivi'=>'required'],
            ['txt_loaitivi.required'=>'Bạn không được để trống trường này']);
        $loaitivi=Loaitivi::find($id);
        $loaitivi->loaitivi=$request->txt_loaitivi;
        $loaitivi->save();
        return redirect()->route('admin.loaitivi.list')->with(['flash_message'=>'Cập nhật thành công']);
    }
    public function postSearch(Request $request){
        $tukhoa=$request->tukhoa;
        $data=Loaitivi::where('loaitivi','like',"%$tukhoa%")->paginate(6);
        return view('admin.loaitivi.index',compact('data'));
    }
}
