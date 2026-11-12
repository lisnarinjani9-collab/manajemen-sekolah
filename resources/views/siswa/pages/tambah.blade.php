@extends('siswa.index')
@section('content')
    <main class="main">
        <header class="page-header">
            <div>
                <h1>Tambah Siswa</h1>
                <p class="subtitle">Masukkan informasi siswa baru.</p>
            </div>
        </header>

        <section class="card form-card">
            <form id="formTambah" method="POST" action="{{ route('siswa.store') }}">
                @csrf
                <div class="form-group">
                    <label for="nisn">
                        NISN <span class="required">*</span>
                    </label>
                    <input type="text" id="nisn" name="nisn" placeholder="Contoh: 1234567890" required>
                </div>

                <div class="form-group">
                    <label for="nama">
                        Nama <span class="required">*</span>
                    </label>
                    <input type="text" id="nama" name="nama" placeholder="Contoh: John Doe" required>
                </div>

                <div class="form-group">
                    <label for="kelas">
                        Kelas <span class="required">*</span>
                    </label>
                    <input type="text" id="kelas" name="kelas" placeholder="Contoh: 10A" required>
                </div>

                <div class="form-group">
                    <label for="jurusan">
                        Jurusan <span class="required">*</span>
                    </label>
                    <input type="text" id="jurusan" name="jurusan" placeholder="Contoh: Teknik Komputer dan Jaringan" required>
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
                    <a href="{{ route('siswa.table') }}" class="btn btn-secondary">Batal</a>
                    <button type="submit" class="btn btn-primary">
                        Simpan Siswa
                    </button>
                </div>
            </form>
        </section>
    </main>
@endsection
