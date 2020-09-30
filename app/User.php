<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ['name_user','id_farmer','group','username','password','status'];
    
}




