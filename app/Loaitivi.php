<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loaitivi extends Model
{
    protected $table ='tbl_loaitivi';

    protected $fillable=['id','loaitivi'];

    public $timestamps=false;
}
