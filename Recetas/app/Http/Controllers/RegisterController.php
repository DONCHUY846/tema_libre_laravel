<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    // Mostrar el formulario de registro
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    // Procesar el formulario de registro
    public function register(Request $request)
    {
        // Validación de datos
        $request->validate([
            'nombreCompleto' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Crear el usuario
        User::create([
            'nombreCompleto' => $request->nombreCompleto,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Hashear la contraseña
        ]);

        // Redirigir al usuario después del registro
        return redirect('/login')->with('success', '¡Registro exitoso! Por favor inicia sesión.');
    }
}