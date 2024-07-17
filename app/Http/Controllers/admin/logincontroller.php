<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\validator;
use Illuminate\Support\Facades\auth;

class logincontroller extends Controller
{
    public function index(){
        return view('admin.login');
    }

    public function authenticate(request $request){
        $validator = validator::make($request->all(),[
        'email' => 'required|email',
        'password' => 'required' 
        ]);
    
        if ($validator->passes()){

            if(auth::guard('admin')->attempt(['email' => $request->email,'password' => $request->password ])){
                if(auth::guard('admin')->user()->role!="admin"){
                    auth::guard('admin')->logout();
                    return redirect()->route('admin.login')->with('errroorrr');
                 }
                 return redirect()->route('admin.dashboard');
            }else{
               return redirect()->route('admin.login')->with('either email or password is incorrect.');
            }

        }else{
            return redirect()
            ->route('admin.login')
            ->withinput()
            ->witherrors($validator);
        }
       
    }
    public function logout(){
        auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }
}
