<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chitiet extends Model
{
    protected $table ='tbl_chitiethd';

    protected $fillable=['id','id_sp','id_donhang','soluong','gia'];

    public $timestamps=false;
}
