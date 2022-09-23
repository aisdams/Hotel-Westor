@extends('layout')
@section('judul', 'Fasilitas Edit')
@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ url('checkpemesanan/'.$datapemesanan->id) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            @method('PUT')
            <div class="row">
                
            <div class="col mb-3">
                <label class="form-label">Nama Hotel</label>
              <select required class="form-control form-select" name="fasilitashotel_id" id="fasilitashotel_id">
                <option selected disabled>Choose Nama Hotel</option>
                @foreach ($fasilitashotel as $item)
                <option value="{{ $item->id }}">{{ $item->namahotel }}</option>
                @endforeach
            </select>
            </div>
            <div class="col mb-3">
                <label for="form-label">Status</label>
                <select class="form-control form-select" name="status" id="status">
                    <option value="" disabled>Pilih Status</option>
                    <option value="1">Used</option>
                    <option value="0">Unused</option>
                </select>
            </div>
            </div>
            <div class="row g-2">
            <div class="col mb-3">
                <label class="form-label">Number Of Guest :</label>
                <input required type="number" placeholder="Number Of Guest" name="bprorng" class="form-control"
                    value="{{ $datapemesanan->bprorng }}">
            </div>
            <div class="col mb-3">
                <label class="form-label">Room Type :</label>
                <select required class="form-select form-control" aria-label="Default select example" name="fasilitaskamar_id">
                    <option selected value="{{ $datapemesanan->fasilitaskamar_id }}">{{ $datapemesanan->fasilitaskamar->tipekamar }}
                    </option>
                </select>
            </select>
            </div>
            </div>

            <div class="row g-2">
                <div class="col mb-3">
                    <label for="exampleInputEmail1" class="form-label">Firstname</label>
                    <input required type="text" placeholder="Firstname" name="firstname" class="form-control"
                        value="{{ $datapemesanan->firstname }}">
                </div>

                <div class="col mb-3">
                    <label class="form-label">Lastname</label>
                    <input required type="text" placeholder="Lastname" name="lastname" class="form-control"
                        value="{{ $datapemesanan->lastname }}">
                </div>
            </div>

            <div class="row g-2">
                <div class="col mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input required type="email" placeholder="email" name="email" class="form-control"
                        value="{{ $datapemesanan->email }}">
                </div>

                <div class="col mb-3">
                    <label class="form-label">No Telp</label>
                    <input required type="number" placeholder="No telp" name="notelp" class="form-control"
                        value="{{ $datapemesanan->notelp }}">
                </div>
            </div>

            <div class="row g-2">
                <div class="col mb-3">
                    <label for="exampleInputEmail1" class="form-label">Tanggal Checkin</label>
                    <input required type="date" placeholder="tanggal_checkin" name="tanggal_checkin" class="form-control"
                        value="{{ $datapemesanan->tanggal_checkin }}">
                </div>

                <div class="col mb-3">
                    <label class="form-label">Tanggal Checkout</label>
                    <input required type="date" placeholder="Tanggal Checkout" name="tanggal_checkout" class="form-control"
                        value="{{ $datapemesanan->tanggal_checkout }}">
                </div>
            </div>

            <div class="col g-2">
            <div class="col mb-3">
                <label class="form-label">Special Request</label>
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" style="height: 70px;" name="spesialrequest" >{{ $datapemesanan->spesialrequest }}</textarea>
            </div>
            <div class="col mb-3">
                <label class="form-label">Total Room use</label>
                <input required type="number" placeholder="Jumlah kamar yang dipinjam" class="form-control"
                    name="jumlahkamar_pinjam" value="{{ $datapemesanan->jumlahkamar_pinjam }}">
            </div>
            </div>

            <button class="btn btn-outline-primary" type="submit">Submit</button>
        </form>
    </div>
</div>
@endsection