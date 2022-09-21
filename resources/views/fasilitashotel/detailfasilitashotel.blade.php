@extends('layout1')
@section('judul','Detail Fasilitas Hotel')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
        <div class="box box-warning">
            <div class="box-header">
                <p>
                    <a href="{{ url('fasilitashotel') }}" class="btn btn-sm btn-flat btn-primary"><i class="fa-solid fa-circle-arrow-left"></i> Back</a>
                </p>
            </div>
            <div class="box-body">
               <div class="table-responsive">
                <table class="table table-stripped text-dark fw-bold">
                    <tbody>
                        <tr>
                            <th>Nama Fasilitas</th>
                            <td>:</td>
                            <td>{{ $fasilitashotel->namafasilitas }}</td> 
                        </tr>
                        <tr>
                            <th>Keterangan</th>
                            <td>:</td>
                            <td>{{ $fasilitashotel->keterangan }}</td>
                        </tr>
                        <tr>
                            <th>Image Fasilitas Hotel</th>
                            <td>:</td>
                            <td><img src="{{ asset('img/'.$fasilitashotel->image) }}" alt="" style="width: 100px" class="mt-1"></td>
                        </tr>
                    </tbody>
                </table>
               </div>
               
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection