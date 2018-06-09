<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ktmh extends Model
{
    protected  $table='tbl_ktmh';

    protected $fillable=['id','kichthuoc'];

    public $timestamps=false;
}
