<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    // Registro de usuario
    public function registro(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'telefono' => 'required|string|max:15',
            'password' => 'required|string|min:8|confirmed',
        ]);

        
        $user = DB::table('users')->insertGetId([
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'email' => $request->email,
            'telefono' => $request->telefono,
            'password' => Hash::make($request->password),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

       
        Auth::loginUsingId($user);

        
        return redirect()->route('rutaBusquedaVuelos')->with('exito', 'Usuario registrado correctamente.');
    }

    
    public function inicio(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        
        if (Auth::attempt($request->only('email', 'password'))) {
            $request->session()->regenerate();

            
            return redirect()->route('rutaBusquedaVuelos')->with('exito', 'Inicio de sesión exitoso.');
        }

        
        return back()->withErrors(['email' => 'Las credenciales no coinciden.'])->withInput();
    }
}

