@extends('nilai.index')
@section('content')
<main class="main">
    <header class="page-header">
                <div>
                    <h1>Nilai</h1>
                    <p class="subtitle">Kelola data nilai siswa Anda.</p>
                </div>
                <a href="{{ route('nilai.tambah') }}" class="btn btn-primary">
                    + Tambah Nilai
                </a>
    </header>

            <section class="card">
                <div class="toolbar">
                    <input type="search" id="searchNilai" class="search" placeholder="Cari nilai...">
                </div>

                <div class="table-wrap">
                    <table>
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama Siswa</th>
                                <th>Mata Pelajaran</th>
                                <th>Nilai</th>
                                <th>Semester</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody id="daftarNilai">
                            @foreach ($nilai as $item)
                             <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->siswa->nama }}</td>
                                <td>{{ $item->mata_pelajaran }}</td>
                                <td>{{ $item->nilai }}</td>
                                <td>{{ $item->semester }}</td>
                                <td>
                                    <a class="btn btn-secondary" href="{{ route('nilai.edit', $item->id) }}">Edit</a>
                                    <form action="{{ route('nilai.delete', $item->id) }}" method="POST" style="display: inline;">
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

