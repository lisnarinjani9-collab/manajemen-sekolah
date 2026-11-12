@extends('siswa.index')
@section('content')
        <main class="main">
            <header class="page-header">
                <div>
                    <h1>Update Siswa</h1>
                    <p class="subtitle">Perbarui informasi siswa Anda.</p>
                </div>
            </header>

            <section class="card form-card">
                <form id="formUpdate" action="{{ route('siswa.update', $siswa->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="hidden" id="siswaId" name="siswaId" value="{{ $siswa->id }}">

                    <div class="form-group">
                        <label for="nisn">
                            Nisn <span class="required">*</span>
                        </label>
                        <input type="text" id="nisn" name="nisn" value="{{ $siswa->nisn }}" required>
                    </div>

                    <div class="form-group">
                        <label for="nama">
                            Nama <span class="required">*</span>
                        </label>
                        <input type="text" id="nama" name="nama" value="{{ $siswa->nama }}" required>
                    </div>

                    <div class="form-group">
                        <label for="kelas">
                            Kelas <span class="required">*</span>
                        </label>
                        <input type="text" id="kelas" name="kelas" value="{{ $siswa->kelas }}" required>
                    </div>

                    <div class="form-group">
                        <label for="jurusan">
                            Jurusan <span class="required">*</span>
                        </label>
                        <input type="text" id="jurusan" name="jurusan" value="{{ $siswa->jurusan }}" required>
                    </div>

                    <div class="form-group">
                        <label for="jenis_kelamin">
                            Jenis Kelamin <span class="required">*</span>
                        </label>
                        <select id="jenis_kelamin" name="jenis_kelamin" required>
                            <option value="Laki-laki" {{ $siswa->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                            <option value="Perempuan" {{ $siswa->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="alamat">
                            Alamat <span class="required">*</span>
                        </label>
                        <input type="text" id="alamat" name="alamat" value="{{ $siswa->alamat }}" required>
                    </div>

                    <div class="form-actions">
                        <a href="{{ route('siswa.table') }}" class="btn btn-secondary">Batal</a>
                        <button type="submit" class="btn btn-primary">
                            Update Siswa
                        </button>
                    </div>
                </form>
            </section>
        </main>
@endsection
