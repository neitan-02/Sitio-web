<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class SessionsController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        // Validamos los datos del formulario
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Intentamos autenticar al usuario
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Autenticación exitosa
            if (auth()->user()->role == 'admin') {
                return redirect()->route('home');
            } else {
                return redirect()->route('usuarios');
            }
        } else {
            // Autenticación fallida
            return back()->withErrors([
                'message' => 'El correo electrónico o contraseña es incorrecto, por favor intente nuevamente',
            ]);
        }
    }

    public function destroy()
    {
        auth()->logout();
        return redirect()->to('/login');
    }
}
