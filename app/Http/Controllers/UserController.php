<?php

namespace App\Http\Controllers;

use App\Http\Requests\createUserRequest;
use App\Http\Requests\Loginrequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Stmt\Return_;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class userController extends Controller
{

    public function accueil(){
        return view('accueil');
    }

    public function login(){
        return view('users.login');
    }

    public function handlelogin(Loginrequest $request): RedirectResponse{
                //Authentification d'un utilisateur


                $credentials = $request->validate([

                    'email' => ['required', 'email'],

                    'password' => ['required'],
                ]);
                if (Auth::attempt($credentials)) {

                    $request->session()->regenerate();

                    return redirect()->intended('dashboard');

                }

                return back()->withErrors(['email' => 'Les informations d\'identification fournies ne correspondent pas à nos enregistrements.',])->onlyInput('email');
    }

    public function register(){
        return view('users.register');
    }


    public function handleregistration(User $user ,createUserRequest $request)
    {
       $user->name = $request->name;
       $user->fistName = $request->fistName;
       $user->tel = $request->tel;
       $user->email = $request->email;
       $user->password =Hash::make( $request->password);
       $user->sexe = $request->sexe;
       $user->etudes_ou_profession = $request->etudes_ou_profession;
       $user->save();

       return redirect()->route('Connection')->with('success','Vous etes bien inscrit. connecter vous');

    }
}