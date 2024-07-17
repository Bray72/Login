<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class AccountController extends Controller
{


    public function updateprofile(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required' . Auth::id(),
        ]);
        

        if ($validator->fails()) {
            return redirect()->route('admin.dashboard')->withInput()->withErrors($validator);
        }

        $user = Auth::user(); // Retrieve the authenticated user
        if ($user instanceof User) {
            $user->name = $request->name;
            $user->email = $request->email;
            $user->role = 'customer';
            $user->save(); // Save the user details
        }

        return redirect()->route('account.dashboard')->with('success', 'Profile updated successfully.');
    }

}


