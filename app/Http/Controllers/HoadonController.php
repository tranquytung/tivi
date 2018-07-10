<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HoadonController extends Controller
{
    public function getList(){
        $data=Order::paginate(6);
        return view('admin.hoadon.index',['data'=>$data]);
    }

    public function getDelete($id){
        $xoa=Order::find($id);
        $xoa->delete();
        return redirect()->route('admin.hoadon.list')->with(['flash_message'=>'Xóa thành công']);
    }

    public function getView($id){
        $hienthi=DB::table('tbl_chitiethd')
            ->join('tbl_sanpham','tbl_chitiethd.id_sp','=','tbl_sanpham.id_sp')
            ->where('id_donhang','=',$id)
            ->get();

        return view('admin.hoadon.list',['hienthi'=>$hienthi]);
    }
}
