<?php

namespace App\Http\Controllers\admin;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class dashboardcontroller extends controller
{
 // ini akan menampilkan halaman admin
 public function index(){
    return view('admin.dashboard');
  }

}
