<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class user extends Model
{
             protected $fillable=['name','email','address','telephone_number','password'];
             protected $hidden=[];
}
