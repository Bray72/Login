<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{

    protected $user;

    public function __construct(){

        $this->user = new user();
        
    }


    public function index()
    {
        $response['users'] = $this->user->all();
        return view('index')->with($response);
    }


    
    public function store(Request $request)
    {
      

        $this->user->create($request->all());
        return redirect()->back();

    }

  
    public function edit(string $id): View
    {
        $user = user::find($id);
    
        if (!$user) {
            // Jika student tidak ditemukan, kembalikan ke halaman sebelumnya dengan pesan error
            // return redirect()->back()->with('error', 'Student not found');
        }
    
        return view('users.edit')->with('user', $user);
    }


    public function update(Request $request, string $id)
    {
        $user = $this->user->find($id);

        $user->update(array_merge($user->toArray(), $request->toArray()));
        return redirect('user');
        activity()->log('Operator '. Auth::guard('admin')->user()->name .' membuat akun  ');
    }

    public function destroy(string $id)
    {
        $user = $this->user->find($id);
        $user->delete();
        return redirect('users');
    }
}