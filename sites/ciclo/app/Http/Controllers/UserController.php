<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() 
    {
        // consulta los usuarios de BD y los envia a la vista
        $users = User::latest()-> get();

        return view('users.index',[
            'users' => $users
        ]);
    }

    public function store(Request $request) 
    {
        // crea un usuario con los datos recibidos
        $request->validate([
            'name'     => 'required',
            'email'    => ['required', 'email', 'unique:users'],
            'password' => ['required', 'min:8'],
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        return back();
    }

    public function destroy(User $user) 
    {
        // elimina el usuario que recibe como parametro
        $user->delete();

        return back();
    }
}
