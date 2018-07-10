<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table ='tbl_donhang';

    protected $fillable=['id','username','email','sdt','diachi','noidung','status','khanhhang_id'];

    public $timestamps=false;
}

