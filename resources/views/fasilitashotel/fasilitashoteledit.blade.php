@extends('layout1')
@section('judul', 'Fasilitas Hotel Edit')
@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ url('fasilitashotel',$fasilitashotel->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label">Nama Fasilitas</label>
                <input type="text" placeholder="Masukkan Nama Fasilitas" class="form-control"
                    value="{{ $fasilitashotel->namafasilitas }}" name="namafasilitas" required>
                @error('namafasilitas')
                <div class="text-warning">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Keterangan</label>
                <input type="text" placeholder="Masukkan Keterangan" class="form-control"
                    value="{{ $fasilitashotel->keterangan }}" name="keterangan" required>
                @error('keterangan')
                <div class="text-warning">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Foto Fasilitas</label>
                <input type="file" class="form-control" name="image">
                @error('image')
                <div class="text-warning">{{ $message }}</div>
                @enderror
                <img src="{{ asset('img/'.$fasilitashotel->image) }}" alt="" style="width: 30%" class="mt-3">
            </div>
            <button class="btn btn-outline-primary" type="submit">Submit</button>
        </form>
    </div>
</div>
@endsection