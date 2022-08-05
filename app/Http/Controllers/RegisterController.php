<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index () {
        return view('auth.register');
    }

    public function store (Request $request) {
        $this->validate($request , [
            'username' => 'required',
            'name' => 'required',
            'email' => 'required',
            'password' => 'required:confirmed'
        ]);
        
        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        
        auth()->attempt($request->only('email' , 'password'));

        return redirect()->route('dashboard');
    }


}
