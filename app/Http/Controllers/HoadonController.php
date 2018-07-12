<?php

namespace App\Http\Controllers;

use App\Chitiet;
use App\Order;
use App\Product;
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

    public  function getActive($id){
        $data=Order::find($id);
        $status=$data['status']==0 ? 1 : 0;

        $data->update(['status'=>$status]);

        $up=DB::table('tbl_sanpham')
            ->join('tbl_chitiethd','tbl_sanpham.id_sp','=','tbl_chitiethd.id_sp')
            ->join('tbl_donhang','tbl_chitiethd.id_donhang','=','tbl_donhang.id')
            ->where('tbl_donhang.id','=',$id)->get();
        foreach ($up as $item){
            $idsp=$item->id_sp;
            $pay=$item->pay;
            $soluong=$item->number;
            $number=($item->soluong)-$soluong;
            $sp=Product::find($idsp);
            $sp->update(['pay'=>$pay+$soluong,'soluong'=>$number]);
        }

        return redirect('admin/hoadon/list');
    }
}
