<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryId extends Model
{
    protected $table = "tbl_danhmuc_sp";

    protected $fillable = ['id','danhmuc_id','sp_id'];

    public $timestamps=false;

}
