@extends('izin.index')
@section('content')
        <main class="main">
            <header class="page-header">
                <div>
                    <h1>Update Izin</h1>
                    <p class="subtitle">Perbarui informasi izin Anda.</p>
                </div>
            </header>

            <section class="card form-card">
                <form id="formUpdate" action="{{ route('izin.update', $izin->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="hidden" id="izinId" name="izinId" value="{{ $izin->id }}">

                    <div class="form-group">
                        <label for="nama_siswa">
                            Nama Siswa <span class="required">*</span>
                        </label>
                        <input type="text" id="nama_siswa" name="nama_siswa" value="{{ $izin->nama_siswa }}" required>
                    </div>

                    <div class="form-group">
                        <label for="kelas">
                            Kelas <span class="required">*</span>
                        </label>
                        <input type="text" id="kelas" name="kelas" value="{{ $izin->kelas }}" required>
                    </div>

                    <div class="form-group">
                        <label for="tanggal">
                            Tanggal <span class="required">*</span>
                        </label>
                        <input type="date" id="tanggal" name="tanggal" value="{{ $izin->tanggal }}" min="{{ date('Y-m-d') }}" required>
                    </div>

                    <div class="form-group">
                        <label for="jenis_izin">
                            Jenis Izin <span class="required">*</span>
                        </label>
                        <select id="jenis_izin" name="jenis_izin" required>
                            <option value="Sakit" {{ $izin->jenis_izin == 'Sakit' ? 'selected' : '' }}>Sakit</option>
                            <option value="Izin" {{ $izin->jenis_izin == 'Izin' ? 'selected' : '' }}>Izin</option>
                            <option value="Dispensasi" {{ $izin->jenis_izin == 'Dispensasi' ? 'selected' : '' }}>Dispensasi</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="alasan">
                            Alasan <span class="required">*</span>
                        </label>
                        <input type="text" id="alasan" name="alasan" value="{{ $izin->alasan }}" required>
                    </div>

                    <div class="form-actions">
                        <a href="{{ route('izin.table') }}" class="btn btn-secondary">Batal</a>
                        <button type="submit" class="btn btn-primary">
                            Update Izin
                        </button>
                    </div>
                </form>
            </section>
        </main>
@endsection
