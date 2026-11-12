@extends('siswa.index')
@section('content')
<main class="main">
    <header class="page-header">
                <div>
                    <h1>Siswa</h1>
                    <p class="subtitle">Kelola data siswa Anda.</p>
                </div>
                <a href="{{ route('siswa.tambah') }}" class="btn btn-primary">
                    + Tambah Siswa
                </a>
    </header>

            <section class="card">
                <div class="toolbar">
                    <input type="search" id="searchSiswa" class="search" placeholder="Cari nama siswa...">
                </div>

                <div class="table-wrap">
                    <table>
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nisn</th>
                                <th>Nama</th>
                                <th>Kelas</th>
                                <th>Jurusan</th>
                                <th>Jenis Kelamin</th>
                                <th>Alamat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody id="daftarSiswa">
                            @foreach ($siswa as $item)
                             <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nisn }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->kelas }}</td>
                                <td>{{ $item->jurusan }}</td>
                                <td>{{ $item->jenis_kelamin }}</td>
                                <td>{{ $item->alamat }}</td>
                                <td>
                                    <a class="btn btn-secondary" href="{{ route('siswa.edit', $item->id) }}">Edit</a>
                                    <form action="{{ route('siswa.delete', $item->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus siswa ini?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </section>
</main>
@endsection

