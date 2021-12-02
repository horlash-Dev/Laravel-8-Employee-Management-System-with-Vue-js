<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Http\Request;

class UserChangePassword extends Controller
{   
        public function showCrendential(User $user)
    {
        return view('auth.passwords.modify',compact('user'));
    }

    public function updateCrendential(Request $request, User $user)
    {
        $request->validate([
          'password' => ['required', 'string', 'min:7', 'confirmed'],
        ]);

       // $password = (\Hash::check($request->password, $user->password)) ? true : abort(419);
        $user->update([
            'password' => \Hash::make($request->password)
        ]);
        return  redirect()->route('user.index')->with('message', 'User Crendentials Updated');
    }
}
