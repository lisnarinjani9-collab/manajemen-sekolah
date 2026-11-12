@extends('guru.index')
@section('content')
        <main class="main">
            <header class="page-header">
                <div>
                    <h1>Update Guru</h1>
                    <p class="subtitle">Perbarui informasi guru Anda.</p>
                </div>
            </header>

            <section class="card form-card">
                <form id="formUpdate" action="{{ route('guru.update', $guru->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="hidden" id="guruId" name="guruId" value="{{ $guru->id }}">

                    <div class="form-group">
                        <label for="nip">
                            NIP <span class="required">*</span>
                        </label>
                        <input type="text" id="nip" name="nip" value="{{ $guru->nip }}" required>
                    </div>

                    <div class="form-group">
                        <label for="nama">
                            Nama <span class="required">*</span>
                        </label>
                        <input type="text" id="nama" name="nama" value="{{ $guru->nama }}" required>
                    </div>

                    <div class="form-group">
                        <label for="mata_pelajaran">
                            Mata Pelajaran <span class="required">*</span>
                        </label>
                        <input type="text" id="mata_pelajaran" name="mata_pelajaran" value="{{ $guru->mata_pelajaran }}" required>
                    </div>

                    <div class="form-group">
                        <label for="jenis_kelamin">
                            Jenis Kelamin <span class="required">*</span>
                        </label>
                        <select id="jenis_kelamin" name="jenis_kelamin" required>
                            <option value="Laki-laki" {{ $guru->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                            <option value="Perempuan" {{ $guru->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="alamat">
                            Alamat <span class="required">*</span>
                        </label>
                        <input type="text" id="alamat" name="alamat" value="{{ $guru->alamat }}" required>
                    </div>

                    <div class="form-actions">
                        <a href="{{ route('guru.table') }}" class="btn btn-secondary">Batal</a>
                        <button type="submit" class="btn btn-primary">
                            Update Guru
                        </button>
                    </div>
                </form>
            </section>
        </main>
@endsection
