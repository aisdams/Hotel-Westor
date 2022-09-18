@extends('layout')
@section('judul', 'Data Pemesanan Create')
@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ url('datapemesanan') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="mb-3">
                <label class="form-label">Number Of Guest</label>
                <input type="number" required placeholder="Number Of Guest" class="form-control" name="bprorng">
            </div>
            <div class="mb-3">
                <label class="form-label">Firstname</label>
                <input type="text" required placeholder="Firstname" class="form-control" name="firstname">
            </div>
            <div class="mb-3">
                <label class="form-label">Lastname</label>
                <input type="text" required placeholder="Lastname" class="form-control" name="lastname">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Type Room</label>
                <select class="form-select form-control" required aria-label="Default select example" name="fasilitaskamar_id">
                    <option selected>Type Room</option>
                    @foreach($fasilitaskamar as $item)
                    <option value="{{ $item->id }}">{{  $item->tipekamar }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Spesial Request</label>
                <textarea name="spesialrequest" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Tanggal Check In</label>
                <input type="date" required placeholder="Input Tanggal Check In" class="form-control" name="tanggal_checkin">
            </div>
            <div class="mb-3">
                <label class="form-label">Tanggal Check Out</label>
                <input type="date" required placeholder="Input Tanggal Check Out" class="form-control" name="tanggal_checkout">
            </div>

            <button class="btn btn-outline-primary" type="submit">Submit</button>
        </form>
    </div>
</div>
@endsection