<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    protected $table = 'tbl_anh';

    protected $fillable = ['id','anh','id_sp'];

    public $timestamps = false;
}
