<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function create () {
        return view('auth.register');
    }

    public function store() {

        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required | email',
            'password' => 'required | confirmed',
        ], [
            'name.required' => 'El nombre es obligatorio',
            'email.required' => 'El correo electrónico es obligatorio.',
            'email.email' => 'Ingresa un correo electrónico válido',
            'password.required' => 'La contraseña es obligatoria',
            'password.confirmed' => 'La confirmación de contraseña no coincide',
        ]);
        
        $user = User::create(request(['name', 'email', 'password']));

        auth()->login($user);
        return redirect()->to('/login');
    }
}
