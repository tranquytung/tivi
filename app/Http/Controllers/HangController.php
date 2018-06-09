<?php

namespace App\Http\Controllers;
use Validator;
use Illuminate\Http\Request;
use App\Hang;
use App\Http\Requests\HangRequest;

class HangController extends Controller
{
    public function getList(){
        $data=Hang::paginate(6);
        return view('admin.hang.index',compact('data'));
    }
    public function getAdd(){
        return view('admin.hang.create');
    }
    public function postAdd(HangRequest $request){
        $file_image=$request->file('anhhang')->getClientOriginalName();
        $hang= new Hang();
        $hang->tenhang=$request->txt_hang;
        $hang->hinhanh=$file_image;
        $request->file('anhhang')->move('upload',$file_image);
        $hang->save();
        return redirect()->route('admin.hang.list')->with(['flash_message'=>'Thêm thành công']);
    }

    public function getDelete($id){
        $hang= Hang::find($id);
        $hang->delete($id);
        return redirect()->route('admin.hang.list')->with(['flash_message'=>'Xóa thành công']);
    }

    public function getEdit($id){
        $data= Hang::find($id)->toArray();
        return view('admin.hang.edit',compact('data'));
    }

    public function postEdit(Request $request, $id){
        $this->validate($request,
            ['txt_hang'=>'required'],
            ['txt_hang.required'=>'Bạn không được để trống tên hãng']);

        $file_image=$request->file('anhhang')->getClientOriginalName();
        $hang= Hang::find($id);
        $hang->tenhang = $request->txt_hang;
        $hang->hinhanh = $file_image;
        $request->file('anhhang')->move('upload',$file_image);

        $hang->save();
        return redirect()->route('admin.hang.list')->with(['flash_message'=>'Cập nhật thành công']);
    }

    public function postSearch(Request $request){
        $tukhoa=$request->tukhoa;
        $data=Hang::where('tenhang','like',"%$tukhoa%")->paginate(6);
        return view('admin.hang.index',compact('data'));
    }
}
