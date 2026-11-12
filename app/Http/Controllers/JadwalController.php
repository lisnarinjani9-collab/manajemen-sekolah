<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    // index menampilkan halaman utama jadwal
    public function index()
    {
        $jadwal = Jadwal::get();
        return view('jadwal.pages.jadwal', compact('jadwal'));
    }

    // create menampilkan form tambah jadwal
    public function create()
    {
        return view('jadwal.pages.tambah');
    }

    // store menyimpan data jadwal baru
    public function store(Request $request)
    {
        $request->validate([
            'kelas' => 'required',
            'hari' => 'required',
            'mata_pelajaran' => 'required',
            'jam_mulai' => 'required',
            'jam_selesai' => 'required'
        ]);

        Jadwal::create($request->all());

        return redirect()->route('jadwal.table')->with('success', 'Jadwal berhasil ditambahkan.');
    }

    // edit menampilkan form edit jadwal

    public function edit(Jadwal $jadwal)
    {
        return view('jadwal.pages.update', compact('jadwal'));
    }

    // update menyimpan perubahan data jadwal

    public function update(Request $request, Jadwal $jadwal)
    {
        $request->validate([
            'kelas' => 'required',
            'hari' => 'required',
            'mata_pelajaran' => 'required',
            'jam_mulai' => 'required',
            'jam_selesai' => 'required'
        ]);

        $jadwal->update($request->all());

        return redirect()->route('jadwal.table')->with('success', 'Jadwal berhasil diperbarui.');
    }

    // destroy menghapus data jadwal

    public function destroy(Jadwal $jadwal)
    {
        $jadwal->delete();
        return redirect()->route('jadwal.table')->with('success', 'Jadwal berhasil dihapus.');
    }
}
