<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function authenticate(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|min:10',
            'password' => 'required|min:8|max:12'
        ]);

        //saat submit, data dimasukkan kedalam array untuk ditata
        $data = [
            'email' => $request->email,
            'password' => $request->password,
        ];


        //didalam if, terdapat ‘Auth::Attempt($data)’ yang berfungsi    melakukan autentikasi 
        if (Auth::Attempt($data)) {
            Session::put('email', $data['email']);
            return redirect('home');
        } else {
            Session::flash('error', 'Email atau Password Salah');
            return redirect('/');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/login');
    }
}
