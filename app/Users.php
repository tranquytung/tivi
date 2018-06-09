<?php

namespace App;

use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Users extends Model
{
    protected $table = 'tbl_khanhhang';

    protected $fillable=['id','username','email','diachi','sdt','password','remember_token'];

    public $timestamps=false;
}
