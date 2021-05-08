<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
      return view('login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/chat');
        }
        else{
          return ['status' => 'Ouve um erro, tente novamente'] ;
        }
    }

    public function logout()
    {
      Auth::logout();
      return redirect("/");
    }

}
