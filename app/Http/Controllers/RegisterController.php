<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
      return view('register');
    }

    public function store(Request $request)
    {
      $request->validate(
        [
         'name' => 'required',
         'username' => 'required',
         'email' => 'required',
         'password' => 'required',
        ]
      );
      $data = $request->all();
      $data['password'] = bcrypt($data["password"]);

      $response = User::create($data);

      session()->flash('message', 'Sua conta foi criada');

      return redirect()->route('login');
    }
}
