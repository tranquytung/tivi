<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dophangiai extends Model
{
    protected $table='tbl_dophangiai';

    protected $fillable=['id','dophangiai'];

    public $timestamps=false;
}
