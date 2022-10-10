<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    //Login Feature
    public function login(){
        return view('auth.login');
    }
    public function validation(Request $req){
        $credentials = $req->validate([
            'email' => 'required|email:dns',
            'password' => [
                'required',
                'min:8',
                'regex:/[a-z]/',
                'regex:/[A-Z]/',
                'regex:/[0-9]/',
            ],
        ]);

        if(Auth::attempt($credentials)){
            $req->session()->regenerate();
            return redirect()->intended('/home');
        }else{
            return back()->withErrors([
                'email' => 'Identitas tersebut tidak cocok dengan data kami.',
            ])->onlyInput('email');
        }

    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('login');
    }

    //Register Feature
    public function register(){
        return view('auth.register');
    }
    public function store(Request $request){
        
        $validatedData = $request->validate([
            'name' => 'required|regex:/^[a-zA-Z\s]*$/',
            'email' => 'required|email:dns|unique:users',
            'password' => [
                'required',
                'min:8',
                'regex:/[a-z]/',
                'regex:/[A-Z]/',
                'regex:/[0-9]/',
            ],
            'confirm_password' => 'required|same:password'
        ]);
        
        $validatedData['password']=Hash::make($validatedData['password']);
        dd($validatedData);
        // User::create($validatedData);

        // $request->session()->flash('success','Registrasi Berhasil! Silakan login!');
        
        // return redirect('/login');
    }
}
