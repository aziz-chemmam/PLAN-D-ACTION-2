<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function registre(Request $request)
    {
        $validatedData = $request->validate([
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'role' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'password' => 'required|string|min:8',
        ]);

        if (request('password') == request('cpassword')) {

            $user = new User;
            $user->lname = request('lname');
            $user->fname = request('fname');
            $user->email = request('email');
            $user->password = bcrypt(request('password'));
            $user->role = request('role');
            $user->save();
            auth()->login($user);
            return view('welcome');
        } else {
            return redirect()->back()->with('error', 'Passwords do not match');
        }
    }
    public function login(Request $request)
    {
        $login = $request->only('email', 'password');

        if (Auth::attempt($login)) {

            $user = auth()->user();
            if ($user->role === 'client') {
                return redirect('/offers');
            } else if ($user->role === 'seller') {
                return redirect('/seller');
            }
        }
        return redirect('/')->withErrors(['formError' => 'Invalid email or password']);
    }
}
