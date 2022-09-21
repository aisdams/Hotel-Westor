@extends('layout1')
@section('judul','Detail Fasilitas Kamar')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
        <div class="box box-warnin`g">
            <div class="box-header">
                <p>
                    <a href="{{ url('fasilitaskamar') }}" class="btn btn-sm btn-flat btn-primary mb-3"><i class="fa-solid fa-circle-arrow-left"></i> Back</a>
                </p>
            </div>
            <div class="box-body">
                <div class="table-responsive">
                <table class="table table-stripped text-dark fw-bold">
                    <tbody>
                        <tr>
                            <th>Type Kamar</th>
                            <td>:</td>
                            <td>{{ $fasilitaskamar->tipekamar }}</td> 
                            <th>Nama Fasilitas</th>
                            <td>:</td>
                            <td>{{ $fasilitaskamar->fasilitashotel->namafasilitas }}</td>
                        </tr>
                        <tr>
                            <th>Jumlah Kamar</th>
                            <td>:</td>
                            <td>{{ $fasilitaskamar->jumlahkamar }}</td> 
                            <th>Jumlah Kamar Tersedia</th>
                            <td>:</td>
                            <td>{{ $fasilitaskamar->jumlahkamar_tersedia }}</td>
                        </tr>
                        <tr>
                            <th>Total Room Used</th>
                            <td>:</td>
                            <td>{{ $fasilitaskamar->jumlahkamar_pinjam }}</td>
                            <th>Total Room unused</th>
                            <td>:</td>
                            <td>{{ $fasilitaskamar->jumlahkamar_takterpakai }}</td> 
                        </tr>
                        <tr>
                            <th>Tarif</th>
                            <td>:</td>
                            <td>RP. {{ $fasilitaskamar->tarif }}</td>
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