<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            
            $user = Auth::user();
            if ($user->status == 'admin') {
                return redirect()->route('homePageAdmin');
            } 

            if ($user->status == 'customer') {
                return redirect()->route('homePageCustomer');
            } 
        }
        return back()->with('loginError', 'Username atau Password Salah!');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('LoginPage');
    }
}
