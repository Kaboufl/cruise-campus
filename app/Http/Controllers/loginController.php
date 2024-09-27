<?php

namespace App\Http\Controllers;

use App\Models\Campus;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    //


    public function login()
    {
        return view('login');
    }

    public function logUser(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            // Authentication passed...
            return redirect()->route('app');
        } else {
            return redirect()->back()->with('error', 'Erreur lors de la connexion');
        }
    }

    public function register()
    {
        $listeCampus = Campus::all();
        return view('register', compact('listeCampus'));
    }

    public function storeUser(Request $request)
    {
        $validator = $request->validate([
            'pseudo' => 'required|min:3',
            'nom' => 'required|min:3',
            'prenom' => 'required|min:3',
            'email' => 'required|email:rfc|unique:users,email',
            'ville' => 'required|string',
            'telephone' => 'required|numeric',
            'campus' => 'required|numeric',
            'password' => 'required|min:8',
            'password_confirmation' => 'required|same:password'
        ]);

        try {
            $user = User::create($request->all());
            event(new Registered($user));
            Auth::login($user);
            return redirect()->route('verification.notice');
            //code...
        } catch (\Throwable $th) {
            throw $th;
            return redirect()->back()->withErrors(['error' => 'Erreur lors de l\'enregistrement']);
        }
    }
}
