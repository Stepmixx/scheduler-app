<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login() {
        return view('auth.login');
    }

    public function signup() {
        return view('auth.signup');
    }

    public function homePage() {
        $user = array();
        if (Session::has('loginId')) {
            $user = User::where('id', '=', Session::get('loginId'))->first();
        }
        return view('home', compact('user'));
    }

    public function shifts() {
        return view('shifts');
    }

    public function disponibilities() {
        return view('disponibilities');
    }

    public function users() {
        if (Session::has('loginId')) {
            $user = User::where('id', '=', Session::get('loginId'))->first();
            if ($user->isAdmin()) {
                $users = User::all();
                return view('users', compact('users'));
            } else {
                return redirect()->route('home');
            }
        }
    }

    public function loginUser(Request $request) {
        $request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);
        $user = User::where('email', '=', $request->email)->first();
        if($user) {
            if(Hash::check($request->password, $user->password)) {
                $request->session()->put('loginId', $user->id);
                return redirect()->route('home');
            } else {
                return back()->with('error', 'Contraseña incorrecta');
            }
        } else {
            return back()->with('error', 'Usuario no existe');
        }
    }

    public function signupUser(Request $request) {
        $request->validate([
            'name'=>'required',
            'lastname'=>'required',
            'identification'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:8|max:16'
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->lastname = $request->lastname;
        $user->identification = $request->identification;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $res = $user->save();
        if($res) {
            return back()->with('success', 'Te has registrado exitosamente');
        } else {
            return back()->with('error', 'Error al registrar');
        }
    }

    public function logout() {
        if (Session::has('loginId')) {
            Session::pull('loginId');
            return redirect()->route('login');
        }
    }

    public function redirect() {
        if (Session::has('loginId')) {
            return redirect()->route('home');
        } else {
            return redirect()->route('login');
        }
    }
}
