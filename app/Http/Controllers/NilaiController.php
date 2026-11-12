<?php

namespace App\Http\Controllers;

use App\Models\Nilai;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    // index menampilkaan halaman utama
    public function index()
    {
        $nilai = Nilai::get();
        return view('nilai.pages.nilai', compact('nilai'));
    }

    // create menampilkan form tambah nilai
    public function create()
    {
        return view('nilai.pages.tambah');
    }

    // store menyimpan data nilai baru
    public function store(Request $request)
    {
        $request->validate([
            'nama_siswa' => 'required',
            'mata_pelajaran' => 'required',
            'nilai' => 'required|integer',
            'semester' => 'required',
        ]);

        Nilai::create([
            'nama_siswa' => $request->nama_siswa,
            'mata_pelajaran' => $request->mata_pelajaran,
            'nilai' => $request->nilai,
            'semester' => $request->semester,
        ]);

        return redirect()->route('nilai.table')->with('success', 'Data nilai berhasil ditambahkan.');
    }

    // edit menampilkan form edit nilai
    public function edit(Nilai $nilai)
    {
        return view('nilai.pages.update', compact('nilai'));
    }

    // update menyimpan perubahan data nilai
    public function update(Request $request, Nilai $nilai)
    {
        $request->validate([
            'nama_siswa' => 'required',
            'mata_pelajaran' => 'required',
            'nilai' => 'required|integer',
            'semester' => 'required',
        ]);

        $nilai->update([
            'nama_siswa' => $request->nama_siswa,
            'mata_pelajaran' => $request->mata_pelajaran,
            'nilai' => $request->nilai,
            'semester' => $request->semester,
        ]);

        return redirect()->route('nilai.table')->with('success', 'Data nilai berhasil diperbarui.');
    }

    // destroy menghapus data nilai
    public function destroy(Nilai $nilai)
    {
        $nilai->delete();
        return redirect()->route('nilai.table')->with('success', 'Data nilai berhasil dihapus.');
    }
}
