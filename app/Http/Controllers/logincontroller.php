<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\validator;
use Illuminate\Support\Facades\auth;
use App\Models\User;




class logincontroller extends Controller
{
    // untuk menampilkan halaman customer
    public function index(){
        return view('login');
    }
    // untuk mengautentifikasi user
    public function authenticate(request $request){
        $validator = validator::make($request->all(),[
        'email' => 'required|email',
        'password' => 'required' 
        ]);
    
        if ($validator->passes()){

            if(auth::attempt(['email' => $request->email,'password' => $request->password ])){
               return redirect()->route('account.dashboard');
            }else{
               return redirect()->route('account.login')->with('either email or password is incorrect.');
            }

        }else{
            return redirect()
            ->route('account.login')
            ->withinput()
            ->witherrors($validator);
        }
       
    }
    // ini akan menunjukkan halaman register
    public function register(){
        return view('register');

    }
    // ini akan menunjukkan halama 
    public function processregister(request $request){
        $validator = validator::make($request->all(),[
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:3',
            'name' => 'required',
            'password_confirmation' => 'required'
            ]);
        
            if ($validator->passes()){
    
             $user = new user();
             $user ->name = $request->name;
             $user ->email = $request->email;
             $user ->password = $request->password;
             $user ->role = 'customer';
             $user ->save();

             return redirect()->route('account.login')->with('success', 'You have registed now');
            }else{
                return redirect()->route('account.register')
                ->withinput()
                ->witherrors($validator);
            }
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('account.login');
    }
    
}
