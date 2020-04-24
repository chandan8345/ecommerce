<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table='users';
    public $timestamps = false;
    protected $fillable=['name','mobile','email','address','company','role','status'];
}
