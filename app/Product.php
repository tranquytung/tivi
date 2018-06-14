<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "tbl_sanpham";

    protected $primaryKey = "id_sp";

    protected $fillable =['id_sp','TenSP','slug','Gia','sale','anh','KTMH_id'.'LoaiTivi_id','Hang_id','Dophangiai_id','noidung','active'];

    public $timestamps=false;

    public function hangSP(){
        return $this->belongsTo('App/Hang');
    }
}
