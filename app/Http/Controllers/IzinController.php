<?php

namespace App\Http\Controllers;

use App\Models\Izin;
use Illuminate\Http\Request;

class IzinController extends Controller
{
    // index menampilkan halaman utama izin
    public function index()
    {
        $izin = Izin::get();
        return view('izin.pages.izin', compact('izin'));
    }

    // create menampilkan form tambah izin
    public function create()
    {
        return view('izin.pages.tambah');
    }

    // store menyimpan data izin baru
    public function store(Request $request)
    {
        $request->validate([
            'nama_siswa' => 'required',
            'kelas' => 'required',
            'tanggal' => 'required|date',
            'jenis_izin' => 'required',
            'alasan' => 'required'
        ]);

        Izin::create($request->all());

        return redirect()->route('izin.table')->with('success', 'Izin berhasil ditambahkan.');
    }

    // edit menampilkan form edit izin
    public function edit(Izin $izin)
    {
        return view('izin.pages.update', compact('izin'));
    }

    // update menyimpan perubahan data izin
    public function update(Request $request, Izin $izin)
    {
        $request->validate([
            'nama_siswa' => 'required',
            'kelas' => 'required',
            'tanggal' => 'required|date',
            'jenis_izin' => 'required',
            'alasan' => 'required'
        ]);

        $izin->update($request->all());

        return redirect()->route('izin.table')->with('success', 'Izin berhasil diperbarui.');
    }

    // destroy menghapus data izin

    public function destroy(Izin $izin)
    {
        $izin->delete();
        return redirect()->route('izin.table')->with('success', 'Izin berhasil dihapus.');
    }
}
