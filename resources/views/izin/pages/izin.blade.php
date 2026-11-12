@extends('izin.index')
@section('content')
<main class="main">
    <header class="page-header">
                <div>
                    <h1>Izin</h1>
                    <p class="subtitle">Kelola data izin siswa Anda.</p>
                </div>
                <a href="{{ route('izin.tambah') }}" class="btn btn-primary">
                    + Tambah Izin
                </a>
    </header>

            <section class="card">
                <div class="toolbar">
                    <input type="search" id="searchIzin" class="search" placeholder="Cari nama izin...">
                </div>

                <div class="table-wrap">
                    <table>
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama Siswa</th>
                                <th>Kelas</th>
                                <th>Tanggal</th>
                                <th>Jenis Izin</th>
                                <th>Alasan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody id="daftarIzin">
                            @foreach ($izin as $item)
                             <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nama_siswa }}</td>
                                <td>{{ $item->kelas }}</td>
                                <td>{{ $item->tanggal }}</td>
                                <td>{{ $item->jenis_izin }}</td>
                                <td>{{ $item->alasan }}</td>
                                <td>
                                    <a class="btn btn-secondary" href="{{ route('izin.edit', $item->id) }}">Edit</a>
                                    <form action="{{ route('izin.delete', $item->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus izin ini?')">Hapus</button>
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

