@extends('jadwal.index')
@section('content')
    <main class="main">
        <header class="page-header">
            <div>
                <h1>Tambah Jadwal</h1>
                <p class="subtitle">Masukkan informasi Jadwal baru.</p>
            </div>
        </header>

        <section class="card form-card">
            <form id="formTambah" method="POST" action="{{ route('jadwal.store') }}">
                @csrf
                <div class="form-group">
                    <label for="kelas">
                        Kelas <span class="required">*</span>
                    </label>
                    <input type="text" id="kelas" name="kelas" placeholder="Contoh: 10A" required>
                </div>

                <div class="form-group">
                    <label for="hari">
                        Hari <span class="required">*</span>
                    </label>
                    <input type="text" id="hari" name="hari" placeholder="Contoh: Senin" required>
                </div>

                <div class="form-group">
                    <label for="mata_pelajaran">
                        Mata Pelajaran <span class="required">*</span>
                    </label>
                    <input type="text" id="mata_pelajaran" name="mata_pelajaran" placeholder="Contoh: Matematika" required>
                </div>

                <div class="form-group">
                    <label for="jam_mulai">
                        Jam Mulai <span class="required">*</span>
                    </label>
                    <input type="time" id="jam_mulai" name="jam_mulai" required>
                </div>

                <div class="form-group">
                    <label for="jam_selesai">
                        Jam Selesai <span class="required">*</span>
                    </label>
                    <input type="time" id="jam_selesai" name="jam_selesai" required>
                </div>

                <div class="form-actions">
                    <a href="{{ route('jadwal.table') }}" class="btn btn-secondary">Batal</a>
                    <button type="submit" class="btn btn-primary">
                        Simpan Jadwal
                    </button>
                </div>
            </form>
        </section>
    </main>
@endsection
