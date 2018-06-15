<?php

namespace App;

use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Users extends Authenticatable
{
    use Notifiable;

    protected $table = 'tbl_khanhhang';

    protected $fillable=['id','username','email','diachi','sdt','password','remember_token'];

    public $timestamps=false;
}
