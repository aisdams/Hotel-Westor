@extends('layout')
@section('judul','Create Fasilitas Hotel')
@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ url('fasilitashotel') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="mb-3">
                <label class="form-label">Nama Fasilitas</label>
                <input type="text" placeholder="Masukkan Nama Fasilitas" class="form-control" name="namafasilitas" required>
                @error('namafasilitas')
                <div class="text-warning">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Keterangan</label>
                <input type="text" placeholder="Masukkan Keterangan" class="form-control" name="keterangan" required>
                @error('keterangan')
                <div class="text-warning">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Foto Fasilitas</label>
                <input type="file" class="form-control" name="image" required>
                @error('image')
                <div class="text-warning">{{ $message }}</div>
                @enderror
            </div>
            <button class="btn btn-outline-primary" type="submit">Submit</button>
        </form>
    </div>
</div>
@endsection