<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class profilecontroller extends controller
{
    // ini akan menampilkan halaman profile
   public function profile(){
     return view('profile');
   }
}