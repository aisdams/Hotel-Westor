@extends('layout1')
@section('judul','Detail Data Pemesanan')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
        <div class="box box-warnin`g">
            <div class="box-header">
                <p>
                    <a href="{{ url('dataresepsionis') }}" class="btn btn-sm btn-flat btn-primary mb-3"><i class="fa-solid fa-circle-arrow-left"></i> Back</a>
                </p>
            </div>
            <div class="box-body">
                <div class="table-responsive">
                <table class="table table-stripped text-dark fw-bold">
                    <tbody>
                        <tr>
                            <th>Number Of Guest</th>
                            <td>:</td>
                            <td>{{ $datapemesanan->bprorng }}</td> 
                            <th>Room Type</th>
                            <td>:</td>
                            <td>{{ $datapemesanan->fasilitaskamar->tipekamar }}</td>
                        </tr>
                        <tr>
                            <th>Firstname</th>
                            <td>:</td>
                            <td>{{ $datapemesanan->firstname }}</td>
                            <th>Lastname</th>
                            <td>:</td>
                            <td>{{ $datapemesanan->lastname }}</td> 
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>:</td>
                            <td>{{ $datapemesanan->email }}</td>
                            <th>No Telp</th>
                            <td>:</td>
                            <td>{{ $datapemesanan->notelp }}</td>
                        </tr>
                        <tr>
                            <th>Tanggal Check In</th>
                            <td>:</td>
                            <td>{{ $datapemesanan->tanggal_checkin }}</td>
                            <th>Tanggal Check Out</th>
                            <td>:</td>
                            <td>{{ $datapemesanan->tanggal_checkout }}</td>
                        </tr>
                        <tr>
                            <th>Tanggal Check In</th>
                            <td>:</td>
                            <td>{{ $datapemesanan->spesialrequest }}</td>
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