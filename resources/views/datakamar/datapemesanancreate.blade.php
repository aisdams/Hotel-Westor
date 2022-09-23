@extends('layout')
@section('judul','Data Pemesanan Create')
@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ url('checkpemesanan') }}" method="post" enctype="multipart/form-data">
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
                <div class="mb-3">
                  {{-- <label class="form-label">Jumlah Terpinjam</label> --}}
                  <input type="hidden" required placeholder="Jumlah Room Terpinjam" class="form-control" name="status"
                      value="1">
              </div>

                <div class="row g-2 mt-2">
                  <div class="col">
                    <label class="form-label">Number Of Guest :</label>
                    <input type="number" class="form-control" placeholder="Input Number Of Guest" name="bprorng">
                  </div>
                  <div class="col">
                      <label class="form-label">Room Type :</label>
                    <select required class="form-control form-select" name="fasilitaskamar_id" id="fasilitaskamar_id">
                      <option selected disabled>Choose Room Type</option>
                      @foreach ($fasilitaskamar as $item)
                      <option value="{{ $item->id }}">{{ $item->tipekamar }}</option>
                      @endforeach
                  </select>
                  </div>
            
                  <div class="row g-2">
                    <div class="col">
                    <label class="form-label">First Name :</label>
                      <input type="text" class="form-control" placeholder=" Input your first name" aria-label="First name" name="firstname">
                    </div>
                    <div class="col">
                      <label class="form-label">Last Name :</label>
                      <input type="text" class="form-control" placeholder="Input your last name" aria-label="Last name" name="lastname">
                    </div>
                </div>
            
                <div class="row g-2">
                  <div class="col">
                    <label for="colFormLabel"  class="form-label">Email :</label>
                    <input type="email" class="form-control" id="colFormLabel" placeholder="Input Your Email" name="email">
                  </div>
                  <div class="col">
                    <label for="colFormLabel"  class="form-label">No Telp :</label>
                    <input type="number" class="form-control" id="colFormLabel" placeholder="Input Your Number Phone" name="notelp">
                  </div>
                </div>

                <div class="row g-2">
                  <div class="col">
                    <label class="form-label">Total Room Use</label>
                    <input type="number" class="form-control" id="colFormLabel" placeholder="Masukan Jumlah Pinjam Kamar" name="jumlahkamar_pinjam">
                  </div>
                <div class="col">
                  <label for="colFormLabel"  class="form-label">Special Request (Optional)</label>
                  <div class="form-floating">
                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" style="height: 70px;"></textarea>
                    <label for="floatingTextarea">Spesial Request</label>
                  </div>
                </div>
                </div>

                <div class="row g-2">
                  <div class="col">
                    <label class="form-label">Tgl. Check In</label>
                    <input type="date" class="form-control" id="colFormLabel" placeholder="col-form-label" name="tanggal_checkin">
                  </div>
                  <div class="col">
                    <label class="form-label">Tgl Check Out</label>
                    <input type="date" class="form-control" id="colFormLabel" placeholder="col-form-label" name="tanggal_checkout">
                  </div>
                </div>
                <button type="submit" class="btn-book mt-4" style="background-color: #dd9b0b;
                padding: 3px 25px;height: 40px;width: 100px;border-radius: 5px;border:none;color:#fff;">Submit</button>
                  </div>
                </div>
              </form>
        </div>
    </div>
@endsection