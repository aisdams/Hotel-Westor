@extends('layout1')
@section('judul', 'Fasilitas Kamar Create')
@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ url('fasilitaskamar') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="row align-items-start">
            <div class="col mb-3">
                <label class="form-label">Type Kamar</label>
                <select class="form-control form-select" required name="tipekamar" id="val_equipfc">
                    <option selected disabled>Pilih Type Kamar</option>
                    <option value="Standar Room">Standar Room</option>
                    <option value="Superior Room">Superior Room</option>
                    <option value="Deluxe Room">Deluxe Room</option>
                    <option value="Twin Room">Twin Room'</option>
                    <option value="Presidential Suite">Presidential Suite</option>
                    <option value="Murphy Room">Murphy Room'</option>
                    <option value="Cabana Room">Cabana Room</option>
                    <option value="Penthouse Room">Penthouse Room'</option>
                </select>
            </div>
            <div class="col mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Fasilitas</label>
                <select class="form-select form-control" required aria-label="Default select example" name="fasilitashotel_id">
                    <option selected disabled>Nama Fasilitas</option>
                    @foreach($fasilitashotel as $item)
                    <option value="{{ $item->id }}">{{  $item->namafasilitas }}</option>
                    @endforeach
                </select>
            </div>
            </div>
            <div class="row align-items-start">
            <div class="col mb-3">
                <label class="form-label">Total Room</label>
                <input type="number" required placeholder="Total Room" class="form-control" name="jumlahkamar">
            </div>
            <div class="col mb-3">
                <label class="form-label">Total Room Unused</label>
                <input type="number" required placeholder="Total Room Yang Tak Terpakai" class="form-control" name="jumlahkamar_takterpakai">
            </div>
            </div>
            <div class="mb-3">
                {{-- <label class="form-label">Jumlah Terpinjam</label> --}}
                <input type="hidden" required placeholder="Jumlah Room Terpinjam" class="form-control" name="jumlahkamar_pinjam"
                    value="0">
            </div>
            <div class="mb-3">
                <label class="form-label">Tarif</label>
                <input type="number" required placeholder="Tarif" class="form-control" name="tarif">
            </div>

            <button class="btn btn-outline-primary" type="submit">Submit</button>
        </form>
    </div>
</div>
@endsection