<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function create(){
        return view('auth.login');
    }

    public function store(){
        if(auth()->attempt(request(['email', 'password'])) == false){
            return back()->withErrors([
                'message' => 'Los datos son incorrectos, inténtalo de nuevo'
            ]);
        }else{
            return redirect()->to('/bitacora');
        }

    }

    public function destroy(){
        auth()->logout();
        return redirect()->to('/');
    }
}
