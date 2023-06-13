<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {

        $validator = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if (Auth::attempt($validator )) {
            $request->session()->regenerate();
            //if user route ke landing
            if (Auth::user()->role->name == 'User'){
                return redirect()->route('landing.index')->with('Success','Login berhasil');
            }
            if (Auth::user()->role->name == 'Staff'){
                return redirect()->route('dashboard.user')->with('Success','Login berhasil');
            }
            else{
            //if admin || staff route dashboard
                return redirect()->route('dashboard.admin')->with('Success','Login berhasil');
            }   
        }
        return back()->with('error', 'Email atau Password salah');

    }

    public function logout(Request $request)
    {
        Auth::logout();
        
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('landing.index');
    }
}
