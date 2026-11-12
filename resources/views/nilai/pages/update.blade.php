@extends('nilai.index')
@section('content')
        <main class="main">
            <header class="page-header">
                <div>
                    <h1>Update Nilai</h1>
                    <p class="subtitle">Perbarui informasi nilai Anda.</p>
                </div>
            </header>

            <section class="card form-card">
                <form id="formUpdate" action="{{ route('nilai.update', $nilai->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="hidden" id="nilaiId" name="nilaiId" value="{{ $nilai->id }}">

                    <div class="form-group">
                        <label for="nama_siswa">
                            Nama Siswa <span class="required">*</span>
                        </label>
                        <input type="text" id="nama_siswa" name="nama_siswa" value="{{ $nilai->nama_siswa }}" required>
                    </div>

                    <div class="form-group">
                        <label for="mata_pelajaran">
                            Mata Pelajaran <span class="required">*</span>
                        </label>
                        <input type="text" id="mata_pelajaran" name="mata_pelajaran" value="{{ $nilai->mata_pelajaran }}" required>
                    </div>

                    <div class="form-group">
                        <label for="nilai">
                            Nilai <span class="required">*</span>
                        </label>
                        <input type="number" id="nilai" name="nilai" value="{{ $nilai->nilai }}" required>
                    </div>

                    <div class="form-group">
                        <label for="semester">
                            Semester <span class="required">*</span>
                        </label>
                        <input type="text" id="semester" name="semester" value="{{ $nilai->semester }}" required>
                    </div>

                    <div class="form-actions">
                        <a href="{{ route('nilai.table') }}" class="btn btn-secondary">Batal</a>
                        <button type="submit" class="btn btn-primary">
                            Update Nilai
                        </button>
                    </div>
                </form>
            </section>
        </main>
@endsection
