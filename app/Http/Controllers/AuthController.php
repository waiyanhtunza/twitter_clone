<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register()
    {
        return view("auth.register");
    }

    public function store()
    {
        $validate =request()->validate(
            [
            'name' => 'required|min:3|max:40',
            'email' => 'required|email|unique:users,email',
            'password' =>  'required|confirmed'
                ]
            );

        User::create([
            'name' => $validate['name'],
            'email' => $validate['email'],
            'password' => $validate['password']
        ]);
       
        return redirect()->route('dashboard')->with('success','Creating User Account is Successful');
        
    }

    public function login()
    {
        return view("auth.login");
    }
    public function authentication()
    {
        $validate =request()->validate(
            [
            'email' => 'required|email|',
            'password' =>  'required'
                ]
            );

            if(auth()->attempt($validate)) 
            {
                request()->session()->regenerate();
                return redirect()->route('dashboard')->with('success','Account is Successful Login');
            }

            return redirect()->route('login')->withErrors([
                'email'=>'Donot mathch your email in this website'
            ]);
    }

    public function logout()
    {
        auth()->logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect()->route('dashboard')->with('success','Account is Successful Logout');

    }
}
