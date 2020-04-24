<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subsubcategory extends Model
{
    protected $table='subsubcategory';
    public $timestamps = false;
    protected $fillable=['name','categoryid','subcategoryid','userid','status'];
}
