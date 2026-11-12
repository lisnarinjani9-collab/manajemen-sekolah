<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    // index menampilkaan halaman utama
    public function index()
    {
        $siswa = Siswa::get();
        return view('siswa.pages.siswa', compact('siswa'));
    }

    // create menampilkan form tambah siswa
    public function create()
    {
        return view('siswa.pages.tambah');
    }

    // store menyimpan data siswa baru
    public function store(Request $request)
    {
        $request->validate([
            'nisn' => 'required|unique:siswas,nisn',
            'nama' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
        ]);

        Siswa::create([
            'nisn' => $request->nisn,
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'jurusan' => $request->jurusan,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
        ]);

        return redirect()->route('siswa.table')->with('success', 'Data siswa berhasil ditambahkan.');
    }

    // edit menampilkan form edit siswa
    public function edit(Siswa $siswa)
    {
        return view('siswa.pages.update', compact('siswa'));
    }

    // update menyimpan perubahan data siswa
    public function update(Request $request, Siswa $siswa)
    {
        $request->validate([
            'nisn' => 'required|unique:siswas,nisn,' . $siswa->id,
            'nama' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
        ]);

        $siswa->update([
            'nisn' => $request->nisn,
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'jurusan' => $request->jurusan,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
        ]);

        return redirect()->route('siswa.table')->with('success', 'Data siswa berhasil diperbarui.');
    }

    // destroy menghapus data siswa
    public function destroy(Siswa $siswa)
    {
        $siswa->delete();
        return redirect()->route('siswa.table')->with('success', 'Data siswa berhasil dihapus.');
    }
}
