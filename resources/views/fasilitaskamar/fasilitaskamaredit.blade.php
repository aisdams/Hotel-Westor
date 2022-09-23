@extends('layout')
@section('judul', 'Fasilitas Edit')
@section('content')
@push('style')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.css">

@endpush
<div class="card">
    <div class="card-body">
        <form action="{{ url('fasilitaskamar/'.$fasilitaskamar->id) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            @method('PUT')
                
            <div class="col mb-3">
                <label class="form-label">Nama Hotel</label><select required class="form-control form-select" name="fasilitashotel_id" id="fasilitashotel_id">
                @foreach ($fasilitashotel as $item)
                <option value="{{ $item->id }}">{{ $item->namahotel }}</option>
                @endforeach
                </select>
            </div>
            <div class="row">

                <div class="col mb-3">
                    <label class="form-label">Type Kamar</label>
                    <input required type="text" placeholder="Type Kamar" name="tipekamar" class="form-control"
                        value="{{ $fasilitaskamar->tipekamar }}">
                </div>
                <div class="col mb-3">
                    <label for="exampleInputEmail1" class="form-label">Fasilitas Kamar</label>
                    <select required id="choices-multiple-remove-button" required name="fasilitaskamar[]" placeholder="Select Fasilitas Kamar upto 7 tags" multiple="multiple">
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