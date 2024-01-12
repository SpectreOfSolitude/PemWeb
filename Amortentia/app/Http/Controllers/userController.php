<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class userController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function register()
    {
        return view('register');
    }

    public function registerAccount(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'unique:users', 'max:255'],
            'password' => ['required', 'string'],
        ]);

        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);

        return to_route('login');
    }

    public function loginAccount(Request $request)
    {
        echo($request);
        $validatedData = $request->validate([
            'email' => 'required|email',
        ]);


        $email = $request->input('email'); // Ambil email dari input form

        $user = User::where('email', $email)->first(); // ambil data participant berdasarkan email


        if ($user) {

            session([
                'name' => $user->name,
                'email' => $user->email,
            ]);

            Auth::login($user);
            session()->flash('status', 'berhasil');
            session()->flash('message', 'Selamat Datang ' . $user->name . '!');

            //  dd($user, $email, session()->all());
            return redirect('amortentia/home'); // Gunakan route yang sesuai
        }

        session()->flash('status', 'gagal');
        session()->flash('message', 'Email tidak terdaftar');

        return redirect('amortentia/home'); // Pastikan route diawali dengan '/'
    }
}
