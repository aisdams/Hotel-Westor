@extends('layout')
@section('judul','Fasilitas Hotel')
@section('content')
@push('style')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
@endpush
<div class="main-panel">
    <div class="content-wrapper">
      <div class="row purchace-popup">
        <div class="container">
            <div class="card mb-4">
            <div class="card mb-5">
                  <div class="card-body">
                    <a href="{{ url('fasilitashotel/create') }}" class="btn btn-icon icon-left btn-primary mb-4"><i
                      class="fas fa-plus"></i><span class="px-2">Tambah</span></a>
                    <table class="table table-hover table-bordered" id="fasilitas">
                        <thead class="table-success">
                          <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Nama Fasilitas</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">image</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody class="alldata">
                        @foreach ($fasilitashotel as $item)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{ $item->namafasilitas }}</td>
                            <td>{{ $item->keterangan }}</td>
                            <td><img src="{{ asset('img/'.$item->image) }}" alt="" style="width: 100px"></td>
                            <td style="display: flex">
                              <div class="dis d-flex">
                                  <a href="{{ url('/fasilitashotel/detail/'.$item->id) }}" class="btn btn-icon btn-info ms-1 text-white"><i
                                          class="fas fa-eye"></i></a>
                                  <a href="{{ url('fasilitashotel/'.$item->id.'/edit') }}" class="btn btn-icon btn-warning ms-1"><i
                                          class="fas fa-pen"></i></a>
                                  <form action="{{ url('fasilitashotel',$item->id) }}" method="POST">
                                      @csrf
                                      @method('delete')
                                      <button type="submit" class="btn btn-icon btn-danger delete ms-1"
                                          data-name="{{ $item->namafasilitas }}"><i class="fas fa-trash"></i></button>
                                  </form>
                              </div>
                          </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
      </div>
      @endsection
@push('scripts')
 <!-- jQuery -->
 <script src="//code.jquery.com/jquery.js"></script>
 <!-- DataTables -->
 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

 <script src="https://cdnjs.cloudflare.com/ajax/libs/validator/13.7.0/validator.min.js"
     integrity="sha512-rJU+PnS2bHzDCvRGFhXouCSxf4YYaUyUfjXMHsHFfMKhWDIEBr8go2LZ2EYXOqASey1tWc2qToeOCYh9et2aGQ=="
     crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
     integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
     crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
     integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
     crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
 
<script type="text/javascript">
$('#fasilitas').DataTable( {
  "searching": true,
  "bPaginate": true
} );
</script>

<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'csrftoken': '{{ csrf_token() }}'
        }
    });
</script>

@endpush