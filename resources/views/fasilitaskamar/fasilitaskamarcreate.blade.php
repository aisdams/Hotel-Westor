@extends('layout')
@section('judul', 'Fasilitas Kamar Create')
@section('content')
@push('style')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.css">

@endpush
<div class="card">
    <div class="card-body">
        <form action="{{ url('fasilitaskamar') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="col mb-3">
                <label class="form-label">Nama Hotel</label>
                <select required class="form-control form-select" name="fasilitashotel_id" id="fasilitashotel_id">
                    <option selected disabled>Choose Room Type</option>
                    @foreach ($fasilitashotel as $item)
                    <option value="{{ $item->id }}">{{ $item->namahotel }}</option>
                    @endforeach
                </select>
            </div>
            <div class="row align-items-start">
            <div class="col mb-3">
                <label class="form-label">Type Kamar</label>
                <select class="form-control form-select" name="tipekamar">
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
                <select id="choices-multiple-remove-button" required name="fasilitaskamar[]" placeholder="Select Fasilitas Kamar upto 7 tags" multiple="multiple" style="width:40px">
                    <option value="AC">AC</option>
                    <option value="Kamar Mandi">Kamar Mandi</option>
                    <option value="Wastafel">Wastafel</option>
                    <option value="TV">TV</option>
                    <option value="Restoran/kafe">Restoran/kafe</option>
                    <option value="Pelayanan Prima">Pelayanan Prima</option>
                    <option value="Parkir Valet">Parkir Valet</option>
                    <option value="Wifi Free">Wifi Free</option>
                    <option value="Sarapan gratis">Sarapan gratis</option>
                    <option value="Kolam renang">Kolam renang</option>
                    <option value="Salon/Spa Kecantikan">Salon/Spa Kecantikan</option>
                    <option value="Pusat kebugaran">Pusat kebugaran</option>
                    <option value="Ruang tamu">Ruang tamu</option>
                    <option value="Taman">Taman</option>
                </select>
            </div>
            </div>
            <div class="row align-items-start mt-5">
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

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.js"></script>
<script>
    $(document).ready(function(){
    
    var multipleCancelButton = new Choices('#choices-multiple-remove-button', {
       removeItemButton: true,
       maxItemCount:7,
       searchResultLimit:7,
       renderChoiceLimit:7
     }); 
    
    
});
</script>
@endpush