<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    public function signIn (Request $request){
        $validate = new ValidateController();
        $user = new User();
        $validate->auth_signIn_validate($request);
        if($request->email == 'omar.montesdeoca@meeimex.com'){
            $user->rol_user = 1;
        }
        $user->name = $request->nom_empresa;
        $user->tipo_empresa = $request->tipo_empresa;
        $user->industria = $request->industria;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->external_auth = 'meeimex';
        $user->save();
        auth()->login($user);
        return redirect()->route('view-inicio');
    }
    public function lognIn(Request $request){
        $validate = new ValidateController();
        $validate->auth_lognIn_validate($request);
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password]) || Auth::attempt(['name' => $request->email, 'password' => $request->password]) ) {
            $request->session()->regenerate();
            return redirect()->route('view-inicio');
        } else {
            return back()->withErrors([
                'error-auth' => 'El correo o la contraseña son incorrectos, vuelve a intentar'
            ]);
        }
    }
    public function logOut(){
        Auth::logout();
        Session::flush();
        return redirect()->route('view-inicio');
    }
    public function login_google(){
        return Socialite::driver('google')->redirect();
    }
    public function google_callback(){
        $user = Socialite::driver('google')->user();
        $userExiste = User::where('external_id', $user->id)->where('external_auth', 'google')->first();
        $usuario = new User();
        if($userExiste){
            Auth::login($userExiste);
            return redirect()->route('view-inicio');
        }else{
            $usuario->external_id = $user->id;
            $usuario->external_auth = 'google';
            $usuario->name = $user->name;
            $usuario->tipo_empresa = 'sin llenar';
            $usuario->industria = 'sin llenar';
            $usuario->email = $user->email;
            $usuario->save();
            auth()->login($usuario);
            return redirect()->route('view-inicio');
        }
    }
}
