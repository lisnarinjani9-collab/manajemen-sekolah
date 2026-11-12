@extends('jadwal.index')
@section('content')
<main class="main">
    <header class="page-header">
        <div>
            <h1>Jadwal</h1>
            <p class="subtitle">Kelola data jadwal Anda.</p>
        </div>
        <a href="{{ route('jadwal.tambah') }}" class="btn btn-primary">
            + Tambah Jadwal
        </a>
    </header>

    <section class="card">
        <div class="toolbar">
            <input type="search" id="searchJadwal" class="search" placeholder="Cari nama jadwal...">
        </div>

        <div class="table-wrap">
            <table>
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Kelas</th>
                        <th>Hari</th>
                        <th>Mata Pelajaran</th>
                        <th>Jam Mulai</th>
                        <th>Jam Selesai</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody id="daftarJadwal">
                    @foreach ($jadwal as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->kelas }}</td>
                        <td>{{ $item->hari }}</td>
                        <td>{{ $item->mata_pelajaran }}</td>
                        <td>{{ date('H:i', strtotime($item->jam_mulai)) }}</td>
                        <td>{{ date('H:i', strtotime($item->jam_selesai)) }}</td>
                        <td>
                            <a class="btn btn-secondary" href="{{ route('jadwal.edit', $item->id) }}">Edit</a>
                            <form action="{{ route('jadwal.delete', $item->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus jadwal ini?')">Hapus</button>
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
