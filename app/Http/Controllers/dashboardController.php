<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;

class dashboardController extends Controller
{
    public function dashboardindex(){
        return view('admin.dashboard');
    }
    public function invoiceindex(){
        return view('admin.invoice');
    }
    public function orderindex(){
        return view('admin.order');
    }
    public function userindex(){
        return view('admin.user');
    }
}
