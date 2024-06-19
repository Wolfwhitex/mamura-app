<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class SellerController extends Controller
{
    public function registerseller(Request $request){
         // Validasi input dari form registrasi
         $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:sellers',
            'NoTelp'=>'required|string|max:20',
            'password' => 'required|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect('/registerseller')
                        ->withErrors($validator)
                        ->withInput();
        }

        // Membuat data seller baru di database
        $seller = Seller::create([
            'name' => $request->name,
            'email' => $request->email,
            'NoTelp' => $request->NoTelp,
            'password' => Hash::make($request->password),
        ]);

        // Redirect ke halaman login seller dengan pesan sukses
        return redirect('/loginseller')->with('status', 'Seller successfully registered. Please login.');
    }
    
    // Method untuk login seller
    public function loginseller(Request $request)
    {
        // Validasi input dari form login
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8',
        ]);

        if ($validator->fails()) {
            return redirect('/loginseller')
                        ->withErrors($validator)
                        ->withInput();
        }

        // Percobaan autentikasi seller
        $credentials = $request->only('email', 'password');
        
        if (Auth::guard('seller')->attempt($credentials)) {
            // Autentikasi sukses, redirect ke halaman profil seller
            return redirect()->intended('/seller_page'); // Sesuaikan halaman setelah login
        }

        // Jika autentikasi gagal, kirim pesan kesalahan
        return redirect('/loginseller')->withErrors(['email' => 'Email atau password salah.']);
    }
    public function logoutseller(Request $request)
    {
        Auth::guard('seller')->logout(); // Log out the seller using the seller guard

        $request->session()->invalidate(); // Invalidate the session

        $request->session()->regenerateToken(); // Regenerate the CSRF token

        return redirect('/loginseller'); // Redirect to the seller login page
    }
}
