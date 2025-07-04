@extends('layouts.admin')

@section('title', 'Tambah Ruangan Baru')

@section('content')
<div class="container">
    <h2>Tambah Ruangan Baru</h2>

    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{ route('admin.room.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="nama_ruangan" class="form-label">Nama Ruangan</label>
                    <input type="text" class="form-control @error('nama_ruangan') is-invalid @enderror" id="nama_ruangan" name="nama_ruangan" value="{{ old('nama_ruangan') }}" required>
                    @error('nama_ruangan')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <textarea class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" name="deskripsi" rows="3" required>{{ old('deskripsi') }}</textarea>
                    @error('deskripsi')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <div class="mb-3">
                    <label for="kapasitas" class="form-label">Kapasitas</label>
                    <input type="number" class="form-control @error('kapasitas') is-invalid @enderror" id="kapasitas" name="kapasitas" min="1" value="{{ old('kapasitas') }}" required>
                    @error('kapasitas')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <div class="mb-3">
                    <label for="fasilitas" class="form-label">Fasilitas (pisahkan dengan koma)</label>
                    <textarea class="form-control @error('fasilitas') is-invalid @enderror" id="fasilitas" name="fasilitas" rows="3" required>{{ old('fasilitas') }}</textarea>
                    @error('fasilitas')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <div class="mb-3">
                    <label for="foto" class="form-label">Foto Ruangan</label>
                    <input class="form-control @error('foto') is-invalid @enderror" type="file" id="foto" name="foto">
                    @error('foto')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <button type="submit" class="btn btn-primary">Simpan Ruangan</button>
                <a href="{{ route('admin.room.index') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</div>
@endsection