@extends('guru.index')
@section('content')
<main class="main">
    <header class="page-header">
                <div>
                    <h1>Guru</h1>
                    <p class="subtitle">Kelola data guru Anda.</p>
                </div>
                <a href="{{ route('guru.tambah') }}" class="btn btn-primary">
                    + Tambah Guru
                </a>
    </header>

            <section class="card">
                <div class="toolbar">
                    <input type="search" id="searchGuru" class="search" placeholder="Cari nama guru...">
                </div>

                <div class="table-wrap">
                    <table>
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nip</th>
                                <th>Nama</th>
                                <th>Mata Pelajaran</th>
                                <th>Jenis Kelamin</th>
                                <th>Alamat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody id="daftarGuru">
                            @foreach ($guru as $item)
                             <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nip }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->mata_pelajaran }}</td>
                                <td>{{ $item->jenis_kelamin }}</td>
                                <td>{{ $item->alamat }}</td>
                                <td>
                                    <a class="btn btn-secondary" href="{{ route('guru.edit', $item->id) }}">Edit</a>
                                    <form action="{{ route('guru.delete', $item->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus guru ini?')">Hapus</button>
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

