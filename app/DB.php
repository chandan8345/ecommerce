<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DBs extends Model
{
    protected $table='employee';
    protected $fillable=['name','email','mobile'];
}
