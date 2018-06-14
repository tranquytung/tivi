<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hang extends Model
{
    protected  $table='tbl_hang';

    protected $fillable=['id','tenhang','hinhang'];

    public $timestamps=false;

    public function SP(){
        return $this->hasMany('App\Product');
    }
}
