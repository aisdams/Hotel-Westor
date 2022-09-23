@extends('tamulayout')
@section('content')
@push('style')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.2/css/bootstrap-toggle.css" integrity="sha512-9tISBnhZjiw7MV4a1gbemtB9tmPcoJ7ahj8QWIc0daBCdvlKjEA48oLlo6zALYm3037tPYYulT0YQyJIJJoyMQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <div class="container mt-3">
        <div class="headernya d-flex">
            <h1>Trips</h1>
            <a href="/room-detail" class="btn mt-3" style="background:rgb(8, 68, 197); color: rgb(255, 255, 255);height:40px;margin-left: 50rem;"><span>Create new Trip</span></a>
        </div>
        <table class="table mt-5">
            <thead>
              <tr>
                    <th scope="col">Nama Hotel</th>
                    <th scope="col">Number Of Guest</th>
                    {{-- <th scope="col">Firstname</th>
                    <th scope="col">Lastname</th>
                    <th scope="col">Email</th>
                    <th scope="col">No Telp</th> --}}
                    <th scope="col">Room Type</th>
                    <th scope="col">Address hotel</th>
                    <th scope="col">Spesial Request</th>
                    <th scope="col">Tanggal Check In</th>
                    <th scope="col">Tanggal Check Out</th>
                    <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ( $datapemesanan as $item )
                <tr>
                    {{-- <th scope="row">{{ $loop->iteration }}</th> --}}
                    <td>{{ $item->fasilitashotel->namahotel }}</td>
                    <td>{{ $item->bprorng }}</td>
                    {{-- <td>{{ $item->firstname }}</td>
                    <td>{{ $item->lastname }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->notelp }}</td> --}}
                    <td>{{ $item->fasilitaskamar->tipekamar }}</td>
                    <td>{{ $item->fasilitashotel->alamat }}</td>
                    <td>{{ $item->spesialrequest }}</td>
                    <td>{{ $item->tanggal_checkin }}</td>
                    <td>{{ $item->tanggal_checkout }}</td>
                    <td style="display: flex">
                            <a href="{{ url('index/account/mytrip/detail/'.$item->id) }}" class="btn btn-icon btn-info ms-1 pt-1 text-white"><i class="fas fa-eye"></i></a>
                            <a href="{{ url('/mytrip/cetakinvoice/'.$item->id) }}" class="btn btn-icon btn-info ms-1 pt-1 text-white"><i class="fa-solid fa-print"></i></a>
                            <form action="{{ url('index/account/mytrip',$item->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-icon btn-danger delete ms-1"
                                    data-name="{{ $item->fasilitashotel->namahotel }}"><i class="fas fa-trash"></i></button>
                            </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
          </table>
    </div>
@endsection
@push('script')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="//code.jquery.com/jquery.js"></script>
<script>
    $('.delete').click(function (event) {
        var form = $(this).closest("form");
        var name = $(this).data("name");
        event.preventDefault();
        swal({
                title: `Are you sure you want to cancel Pemesanan hotel ${name}?`,
                text: "If you cancle this, it will be gone forever.",
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
@endpush