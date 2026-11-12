@extends('izin.index')
@section('content')
    <main class="main">
        <header class="page-header">
            <div>
                <h1>Tambah Izin</h1>
                <p class="subtitle">Masukkan informasi izin baru.</p>
            </div>
        </header>

        <section class="card form-card">
            <form id="formTambah" method="POST" action="{{ route('izin.store') }}">
                @csrf
                <div class="form-group">
                    <label for="nama_siswa">
                        Nama Siswa <span class="required">*</span>
                    </label>
                    <input type="text" id="nama_siswa" name="nama_siswa" placeholder="Contoh: John Doe" required>
                </div>

                <div class="form-group">
                    <label for="kelas">
                        Kelas <span class="required">*</span>
                    </label>
                    <input type="text" id="kelas" name="kelas" placeholder="Contoh: 10A" required>
                </div>

                <div class="form-group">
                    <label for="tanggal">
                        Tanggal <span class="required">*</span>
                    </label>
                    <input type="date" id="tanggal" name="tanggal" min="{{ date('Y-m-d') }}" required>
                </div>

                <div class="form-group">
                    <label for="jenis_izin">
                        Jenis Izin <span class="required">*</span>
                    </label>
                    <select id="jenis_izin" name="jenis_izin" required>
                        <option value="Sakit">Sakit</option>
                        <option value="Izin">Izin</option>
                        <option value="Dispensasi">Dispensasi</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="alasan">
                        Alasan <span class="required">*</span>
                    </label>
                    <input type="text" id="alasan" name="alasan" placeholder="Contoh: Sakit demam" required>
                </div>

                <div class="form-actions">
                    <a href="{{ route('izin.table') }}" class="btn btn-secondary">Batal</a>
                    <button type="submit" class="btn btn-primary">
                        Simpan Izin
                    </button>
                </div>
            </form>
        </section>
    </main>
@endsection
