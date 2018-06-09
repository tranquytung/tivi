<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table ='tbl_danhmuc';

    protected $fillable =['id','name','postion','active','slug','parent_id'];

    public $timestamps=false;

    public function products(){
       return $this->belongsToMany('App\Product', 'tbl_danhmuc_sp', 'danhmuc_id', 'sp_id');
    }
}
