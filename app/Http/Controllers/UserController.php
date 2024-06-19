<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Register a new user.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function registeruser(Request $request)
    {
        // Validasi data yang dikirim dari form
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            // Kembali ke halaman registrasi dengan pesan error
            return redirect('/registeruser')
                        ->withErrors($validator)
                        ->withInput();
        }

        // Membuat user baru dan menyimpan ke database
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Redirect ke halaman login dengan pesan sukses
        return redirect('/loginuser')->with('status', 'User successfully registered. Please login.');
    }

    public function loginuser(Request $request)
    {
        // Validasi input dari form login
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8',
        ]);

        if ($validator->fails()) {
            return redirect('/loginuser')
                        ->withErrors($validator)
                        ->withInput();
        }

        // Percobaan autentikasi user
        $credentials = $request->only('email', 'password');
        
        if (Auth::attempt($credentials)) {
            // Autentikasi sukses, redirect ke halaman yang aman
            return redirect()->intended('/profile'); // Sesuaikan halaman setelah login
        }

        // Jika autentikasi gagal, kirim pesan kesalahan
        return redirect('/loginuser')->withErrors(['email' => 'Email atau password salah.']);
    }
}
