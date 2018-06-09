<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\CategoryRequest;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getList(){
        $data=Category::paginate(6);
        return view('admin.category.index',['data'=>$data]);
    }

    public function getDelete($id){
        $cate=Category::find($id);
        $cate->delete();
        return redirect()->route('admin.category.list')->with(['flash_message'=>'Xóa thành công']);
    }

    public function getAdd(){
        return view('admin.category.create');
    }

    public function postAdd(CategoryRequest $request){
        $cate=new Category();
        $cate->name=$request->txt_name;
        $cate->active=$request->sl_active;
        $cate->slug=$request->txt_slug;
        $cate->save();
        return redirect()->route('admin.category.list')->with(['flash_message'=>'Thêm thành công']);
    }

    public function getEdit($id){
        $data=Category::find($id)->toArray();
        return view('admin.category.edit',compact('data'));
    }

    public function postEdit(Request $request,$id){
        $this->validate($request,
            ['txt_name'=>'required'],
            ['txt_name.required'=>'Bạn không được để trống trường này']);
        $cate=Category::find($id);
        $cate->name=$request->txt_name;
        $cate->slug=$request->txt_slug;
        $cate->active=$request->sl_active;
        $cate->save();
        return redirect()->route('admin.category.list')->with(['flash_message'=>'Cập nhật thành công']);
    }
    public function postSearch(Request $request){
        $tukhoa=$request->tukhoa;
        $data=Category::where('name','like',"%$tukhoa%")->paginate(6);
        return view('admin.category.index',compact('data'));
    }
}
