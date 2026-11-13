<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        // validasi password dan email
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|min:8|not_in:password,1234'
        ],[
            'required' => ':attribute harus diisi.',
            'not_in' => ':password terlalu umum untuk digunakan'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors
            ($validator->errors());
        }

        if (Auth::attempt($request->only('email', 'password'))) {
            $request->session()->regenerate();

        // cek role user (huruf besar/kecil tidak masalah)
        $role = strtolower(Auth::user()->role);

        if ($role === 'guru') {
            return redirect()->route('guru.table')
            ->with('success', 'Login berhasil selamat datang '
            . Auth::user()->name);
        }

        // arahkan ke halaman siswa jika role user adalah siswa
        if ($role === 'siswa') {
            return redirect()->route('siswa.table')
            ->with('success', 'Login berhasil selamat datang '
            . Auth::user()->name);
        }

        // kalau role di database bukan guru / siswa
        $roleDb = Auth::user()->role;
        Auth::logout();
        return back()->withErrors([
            'email' => 'Email dan password benar, tapi role akun tidak dikenali (isi kolom role: "' . $roleDb . '").',
        ])->onlyInput('email');

    }
        // kembali jika email atau password salah
        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ])->onlyInput('email');
    }
}
