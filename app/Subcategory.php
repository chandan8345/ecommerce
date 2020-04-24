<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    protected $table='subcategory';
    public $timestamps = false;
    protected $fillable=['name','categoryid','userid','status'];
}
