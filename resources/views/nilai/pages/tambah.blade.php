@extends('nilai.index')
@section('content')
    <main class="main">
        <header class="page-header">
            <div>
                <h1>Tambah Nilai</h1>
                <p class="subtitle">Masukkan informasi Nilai baru.</p>
            </div>
        </header>

        <section class="card form-card">
            <form id="formTambah" method="POST" action="{{ route('nilai.store') }}">
                @csrf
                <div class="form-group">
                    <label for="nama_siswa">
                        Nama Siswa <span class="required">*</span>
                    </label>
                    <input type="text" id="nama_siswa" name="nama_siswa" placeholder="Contoh: John Doe" required>
                </div>

                <div class="form-group">
                    <label for="mata_pelajaran">
                        Mata Pelajaran <span class="required">*</span>
                    </label>
                    <input type="text" id="mata_pelajaran" name="mata_pelajaran" placeholder="Contoh: Matematika" required>
                </div>

                <div class="form-group">
                    <label for="nilai">
                        Nilai <span class="required">*</span>
                    </label>
                    <input type="number" id="nilai" name="nilai" placeholder="Contoh: 85" required>
                </div>

                <div class="form-group">
                    <label for="semester">
                        Semester <span class="required">*</span>
                    </label>
                    <input type="text" id="semester" name="semester" placeholder="Contoh: Ganjil" required>
                </div>

                <div class="form-actions">
                    <a href="{{ route('nilai.table') }}" class="btn btn-secondary">Batal</a>
                    <button type="submit" class="btn btn-primary">
                        Simpan Nilai
                    </button>
                </div>
            </form>
        </section>
    </main>
@endsection
