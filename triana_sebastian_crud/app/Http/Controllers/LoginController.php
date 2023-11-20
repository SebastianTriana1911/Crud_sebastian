<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLogin;
use Illuminate\Http\Request;

class LoginController extends Controller{
    
    public function index(){
        return view('auth.login');
    }

    public function store(StoreLogin $request){
        if(!auth()->attempt($request->only('email', 'password'))){

            return back()->with('mensaje', 'Credenciales incorrectas');
        }

        return redirect()->route('home.index');
    }
}
