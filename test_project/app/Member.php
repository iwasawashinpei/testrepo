<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    //
     protected $fillable = ['id', 'name', 'password', 'tel', 'note', 'created_at', 'update_at'];
}
