<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardcontroller extends Controller
{
    // ini akan menampilkan halaman customer
   public function index(){
     return view('dashboard');
   }
}
