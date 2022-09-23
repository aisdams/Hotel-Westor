@extends('layout')
@section('judul','Data Pemesanan')
@section('content')
@push('style')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.2/css/bootstrap-toggle.css" integrity="sha512-9tISBnhZjiw7MV4a1gbemtB9tmPcoJ7ahj8QWIc0daBCdvlKjEA48oLlo6zALYm3037tPYYulT0YQyJIJJoyMQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    table.dataTable thead .sorting:before,
    table.dataTable thead .sorting_asc:before,
    table.dataTable thead .sorting_desc:before,
    table.dataTable thead .sorting_asc_disabled:before,
    table.dataTable thead .sorting_desc_disabled:before {
    right: 1em;
    content: "\2191" !important;
    font-size: 18px !important;
    margin-bottom: .3rem !important;
    }
    table.dataTable thead .sorting:after,
    table.dataTable thead .sorting_asc:after,
    table.dataTable thead .sorting_desc:after,
    table.dataTable thead .sorting_asc_disabled:after,
    table.dataTable thead .sorting_desc_disabled:after {
    right: 0.5em;
    content: "\2193" !important;
    font-size: 18px !important;
    margin-bottom: .3rem !important;
    }
</style>
@endpush
<div class="card">
    <div class="card-body">
        <a href="{{ url('checkpemesanan/create') }}" class="btn btn-icon icon-left btn-primary mb-4"><i
                class="fas fa-plus"></i><span class="px-2">Tambah</span></a>
        <table class="table table-bordered dataTable table-hover table-sm table-responsive" id="fasilitas">
        <a href="/exportpemesanan" class="btn btn-icon icon-left btn-danger mb-4"></i><i class="fa-solid fa-file-pdf"></i><span class="px-2">Export PDF</span></a>
            <thead style="font-size: 14px"  class="table-success">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Hotel</th>
                    <th scope="col">Jumlah Orang</th>
                    <th scope="col">Jumlah Room Use</th>
                    <th scope="col">Firstname</th>
                    <th scope="col">Lastname</th>
                    <th scope="col">Email</th>
                    <th scope="col">No Telp</th>
                    <th scope="col">Status</th>
                    <th scope="col">Room Type</th>
                    <th scope="col">Spesial Request</th>
                    <th scope="col">Tanggal CheckIn</th>
                    <th scope="col">Tanggal CheckOut</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody class="alldata">
                @foreach ( $data as $item )
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $item->fasilitashotel->namahotel }}</td>
                    <td>{{ $item->bprorng }}</td>
                    <td>{{ $item->jumlahkamar_pinjam }}</td>
                    <td>{{ $item->firstname }}</td>
                    <td>{{ $item->lastname }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->notelp }}</td>
                    <td>
                        <input data-id="{{$item->id}}" type="checkbox" class="toggle-class" data-onstyle="warning" data-offstyle="success" data-toggle="toggle" data-on="Used" data-off="Unused" {{ $item->status ? 'checked': '' }}>
                    </td>
                    <td>{{ $item->fasilitaskamar->tipekamar }}</td>
                    <td>{{ $item->spesialrequest }}</td>
                    <td>{{ $item->tanggal_checkin }}</td>
                    <td>{{ $item->tanggal_checkout }}</td>
                    <td style="display: flex">
                        <div class="dis d-flex">
                            <a href="{{ url('/checkpemesanan/detail/'.$item->id)}}" class="btn btn-icon btn-info ms-1 text-white"><i
                                    class="fas fa-eye"></i></a>
                            <a href="{{ url('checkpemesanan/'.$item->id.'/edit') }}" class="btn btn-icon btn-warning ms-1"><i
                                    class="fas fa-pen"></i></a>
                            <form action="{{ url('checkpemesanan',$item->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-icon btn-danger delete ms-1"
                                    data-name="{{ $item->fasilitaskamar->tipekamar }}"><i class="fas fa-trash"></i></button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

@push('scripts')
<!-- jQuery -->
<script src="//code.jquery.com/jquery.js"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js" integrity="sha512-F636MAkMAhtTplahL9F6KmTfxTmYcAcjcCkyu0f0voT3N/6vzAuJ4Num55a0gEJ+hRLHhdz3vDvZpf6kqgEa5w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
    $.ajaxSetup({
        headers: {
            'csrftoken': '{{ csrf_token() }}'
        }
    });
</script>

<script>
    $('.delete').click(function (event) {
        var form = $(this).closest("form");
        var name = $(this).data("name");
        event.preventDefault();
        swal({
                title: `Are you sure you want to delete ${name}?`,
                text: "If you delete this, it will be gone forever.",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    form.submit();
                    swal("Data berhasil di hapus", {
                        icon: "success",
                    });
                } else {
                    swal("Data tidak jadi dihapus");
                }
            });
    });
</script>

<script>
    $(function () {
        $('#fasilitas').DataTable().fnDestroy({
            columnDefs: [{
                paging: true,
                scrollX: true,
                lengthChange: true,
                searching: true,
                ordering: true,
                targets: [1, 2, 3, 4],
            }, ],
        });

        $('.toggle-class').change(function() {
            var status = $(this).prop('checked') == true ? 1 : 0;
            var datapemesanan_id = $(this).data('id');
                $.ajax({
                type: "GET",
                dataType: "json",
                url: '/changeStatus',
                data: {'status': status, 'datapemesanan_id': datapemesanan_id},
                success: function(data){
                console.log(data.success)
                }
            });
        })

        $('button').click(function () {
            var data = table.$('input, select', 'button', 'form').serialize();
            return false;
        });
        table.columns().iterator('column', function (ctx, idx) {
            $(table.column(idx).header()).prepend('<span class="sort-icon"/>');
        });
    });
</script>

<script>
    @if(Session::has('success'))
    toastr.success("{{ Session::get('success') }}")
    @endif
</script>

@endpush