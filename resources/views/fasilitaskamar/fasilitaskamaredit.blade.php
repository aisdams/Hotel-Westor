@extends('layout1')
@section('judul', 'Fasilitas Edit')
@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ url('fasilitaskamar/'.$fasilitaskamar->id) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            @method('PUT')
            <div class="mb-3">
                <label class="form-label">Type Kamar</label>
                <input required type="text" placeholder="Type Kamar" name="tipekamar" class="form-control"
                    value="{{ $fasilitaskamar->tipekamar }}">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Fasilitas</label>
                <select required class="form-select form-control" aria-label="Default select example" name="fasilitashotel_id">
                    <option selected value="{{ $fasilitaskamar->fasilitashotel_id }}">{{ $fasilitaskamar->fasilitashotel->namafasilitas }}
                    </option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Total Room</label>
                <input required type="number" placeholder="Jumlah Kamar" name="jumlahkamar" class="form-control"
                    value="{{ $fasilitaskamar->jumlahkamar }}">
            </div>
            <div class="mb-3">
                {{-- <label class="form-label">Jumlah Tersedia</label> --}}
                <input required type="hidden" placeholder="Jumlah Kamar Yang Tersedia" name="jumlahkamar_tersedia"
                    class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Total Tak Terpakai</label>
                <input required type="number" placeholder="Jumlah Room Yang Tak Terpakai" name="jumlahkamar_takterpakai" class="form-control"
                    value="{{ $fasilitaskamar->jumlahkamar_takterpakai }}">
            </div>
            <fieldset disabled>
                <div class="mb-3">
                    <label class="form-label">Total Room Terpinjam</label>
                    <input required type="number" placeholder="Jumlah Room Terpinjam" name="jumlahkamar_pinjam" class="form-control"
                        value="{{ $fasilitaskamar->jumlahkamar_pinjam }}">
                </div>
            </fieldset>
            <div class="mb-3">
                <label class="form-label">Tarif</label>
                <input required type="number" placeholder="Tarif" name="tarif" class="form-control"
                    value="{{ $fasilitaskamar->tarif }}">
            </div>
            <button class="btn btn-outline-primary" type="submit">Submit</button>
        </form>
    </div>
</div>
@endsection