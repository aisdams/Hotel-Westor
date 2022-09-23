@extends('layout')
@section('judul', 'Fasilitas Hotel Edit')
@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ url('fasilitashotel',$fasilitashotel->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label">Nama Hotel</label>
                <input type="text" placeholder="Masukkan Nama Hotel" class="form-control"
                    value="{{ $fasilitashotel->namahotel }}" name="namahotel" required>
                @error('namahotel')
                <div class="text-warning">{{ $message }}</div>
                @enderror
            </div>
            <div class="row">
                
            <div class="col mb-3">
                <label class="form-label">Alamat</label>
                <textarea type="text" placeholder="Masukkan Alamat" class="form-control" name="alamat" required>{{ $fasilitashotel->alamat }}</textarea>
                @error('alamat')
                <div class="text-warning">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="col mb-3">
                <label class="form-label">Keterangan</label>
                <input type="text" placeholder="Masukkan Keterangan" class="form-control"
                    value="{{ $fasilitashotel->keterangan }}" name="keterangan" required>
                @error('keterangan')
                <div class="text-warning">{{ $message }}</div>
                @enderror
            </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Foto Hotel</label>
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