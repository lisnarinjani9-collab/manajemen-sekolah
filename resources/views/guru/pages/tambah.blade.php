@extends('guru.index')
@section('content')
    <main class="main">
        <header class="page-header">
            <div>
                <h1>Tambah Guru</h1>
                <p class="subtitle">Masukkan informasi guru baru.</p>
            </div>
        </header>

        <section class="card form-card">
            <form id="formTambah" method="POST" action="{{ route('guru.store') }}">
                @csrf
                <div class="form-group">
                    <label for="nip">
                        NIP <span class="required">*</span>
                    </label>
                    <input type="text" id="nip" name="nip" placeholder="Contoh: 1234567890" required>
                </div>

                <div class="form-group">
                    <label for="nama">
                        Nama <span class="required">*</span>
                    </label>
                    <input type="text" id="nama" name="nama" placeholder="Contoh: John Doe" required>
                </div>

                <div class="form-group">
                    <label for="mata_pelajaran">
                        Mata Pelajaran <span class="required">*</span>
                    </label>
                    <input type="text" id="mata_pelajaran" name="mata_pelajaran" placeholder="Contoh: Matematika" required>
                </div>

                <div class="form-group">
                    <label for="jenis_kelamin">
                        Jenis Kelamin <span class="required">*</span>
                    </label>
                    <select id="jenis_kelamin" name="jenis_kelamin" required>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="alamat">
                        Alamat <span class="required">*</span>
                    </label>
                    <input type="text" id="alamat" name="alamat" placeholder="Contoh: Jl. Merdeka No. 123, Jakarta" required>
                </div>

                <div class="form-actions">
                    <a href="{{ route('guru.table') }}" class="btn btn-secondary">Batal</a>
                    <button type="submit" class="btn btn-primary">
                        Simpan Guru
                    </button>
                </div>
            </form>
        </section>
    </main>
@endsection
