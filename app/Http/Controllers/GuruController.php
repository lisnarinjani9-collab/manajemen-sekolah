<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    // index menampilkan halaman utama guru
    public function index()
    {
        $guru = Guru::get();
        return view('guru.pages.guru', compact('guru'));
    }

    // create menampilkan form tambah guru

    public function create()
    {
        return view('guru.pages.tambah');
    }

    // store menyimpan data guru baru

    public function store(Request $request)
    {
        $request->validate([
            'nip' => 'required|unique:gurus,nip',
            'nama' => 'required',
            'mata_pelajaran' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
        ]);

        Guru::create([
            'nip' => $request->nip,
            'nama' => $request->nama,
            'mata_pelajaran' => $request->mata_pelajaran,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
        ]);

        return redirect()->route('guru.table')->with('success', 'Data guru berhasil ditambahkan.');
    }

    // edit menampilkan form edit guru

    public function edit(Guru $guru)
    {
        return view('guru.pages.update', compact('guru'));
    }

    // update menyimpan perubahan data guru

    public function update(Request $request, Guru $guru)
    {
        $request->validate([
            'nip' => 'required|unique:gurus,nip,' . $guru->id,
            'nama' => 'required',
            'mata_pelajaran' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
        ]);

        $guru->update([
            'nip' => $request->nip,
            'nama' => $request->nama,
            'mata_pelajaran' => $request->mata_pelajaran,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
        ]);

        return redirect()->route('guru.table')->with('success', 'Data guru berhasil diperbarui.');
    }

    // destroy menghapus data guru

    public function destroy(Guru $guru)
    {
        $guru->delete();
        return redirect()->route('guru.table')->with('success', 'Data guru berhasil dihapus.');
    }
}
