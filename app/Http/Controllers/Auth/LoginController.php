<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    // Redirige al usuario a la página de autenticación de Google
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    // Maneja el callback de Google
    public function handleGoogleCallback()
    {
        try {
            $user = Socialite::driver('google')->user();
            // Aquí puedes buscar o crear el usuario en tu base de datos e iniciar sesión
            // Por ejemplo:
            // $finduser = User::where('google_id', $user->id)->first();
            // if($finduser){
            //     Auth::login($finduser);
            // } else {
            //     $newUser = User::create([...]);
            //     Auth::login($newUser);
            // }
            // Para pruebas, mostramos la información del usuario:
            dd($user);
        } catch (\Exception $e) {
            return redirect()->route('home')->with('error', 'No se pudo autenticar con Google.');
        }
    }
}
