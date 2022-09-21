<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hotel Westore</title>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style-rd.css') }}">
  </head>
  <body>

    <nav class="position-fixed">
        <div class="logo">
            <a href="/"><img src="{{ asset('img/logohotel.png') }}" alt="" width="200px"></a>
        </div>
        
          <ul class="nav" id="nav-kiri">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Offers</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Event</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link">Room</a>
            </li>
            <li class="nav-item">
                <a class="nav-link">Contact Us</a>
            </li>
            <button type="button" class="btn-login">Login</button>
        </ul>
    </nav>


    <div class="container-rd">
        <div class="crd-content">
            <img src="https://wallpaperaccess.com/full/6688260.jpg" alt="" style="width: 100%;">
        </div>
        <div class="crd-title" style="position:relative;top:-15rem">
            <div class="crdt-content">
                <div class="crdtc-isi">
                        <h1>Type Deluxe</h1>
                        <button type="button" class="btn-book mt-0"><a href="#booknow">Book Now</a></button>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container-content">
        <div class="rd-content" style="position: relative;top: -18rem;">
            <div class="rdc-left">
                <div class="rdcl-top">
                    <img src="{{ asset('img/bathroom-interior2.png') }}" alt="">
                    <img src="{{ asset('img/bathroom-interior3.png') }}" alt="">
                </div>
                <div class="rdcl-bottom">
                    <img src="{{ asset('img/bathroom-interior3.png') }}" alt="">
                    <img src="{{ asset('img/bathroom-interior.png') }}" alt="">
                </div>
            </div>
            <div class="rdc-right">
                <h1>Overview</h1>
                <p>With a stay at Hotel Kazerne in Eindhoven (Eindhoven City Center), you'll be within a 10-minute walk of Philips Museum and Van Abbemuseum. Featured amenities include complimentary newspapers in the lobby, dry cleaning/laundry services, and luggage</p>
            </div>
        </div>
    </div>

    <div class="line-center"></div>

    <div class="container-fasilitas">
        <div class="cf-left">
            <h1>Amenities</h1>
            <div class="cfl-menu">
                <div class="cfl-menu-l">
                    <div class="clfm-content">
                        <img src="{{ asset('img/cutlery.png') }}" alt="">
                        <h1>Restaurant</h1>
                    </div>
                    <div class="clfm-content">
                        <img src="{{ asset('img/room-service.png') }}" alt="">
                        <h1>Room Service</h1>
                    </div>
                    <div class="clfm-content">
                        <img src="{{ asset('img/coffee.png') }}" alt="">
                        <h1>Tea/Coffee maker</h1>
                    </div>
                </div>
    
                <div class="cfl-menu-r">
                    <div class="clfm-content">
                        <img src="{{ asset('img/tv.png') }}" alt="">
                        <h1>TV</h1>
                    </div>
                    <div class="clfm-content">
                        <img src="{{ asset('img/parking.png') }}" alt="">
                        <h1>Free Parking</h1>
                    </div>
                    <div class="clfm-content">
                        <img src="{{ asset('img/coffee.png') }}" alt="">
                        <h1>Tea/Coffee maker</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="line-limit"></div>

        <div class="cf-right">
            <h1>Things to keep in mind</h1>
            <div class="cfr-top">
                <h3>Cancellation/prepayment</h3>
                <p>Cancellation/prepayment policies vary by room type and provider</p>
            </div>
            <div class="cfr-bottom">
                <h3>Check-in/Check-out</h3>
                <p>Check in anytime after 2:00p, check out anytime before 12:00p</p>
            </div>
        </div>
    </div>
  </div>
  <div class="container mb-5" style="position:relative;top: 140rem;" id="booknow">
    <h1 >Hotel Booking Confirmation</h1>
    <p class="fw-light mt-4">Thank you for choosing Longueville Manor for your forthcoming visit to Jersey. It is our pleasure to </br> confirm your reservation as follows:</p>
    <div class="room-book mt-4">
      <form action="{{ url('/index/account/mytrip') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="row g-2">
          <div class="col">
            <label for="colFormLabel" class="col-form-label col-form-label">Number Of Guest :</label>
            <input type="number" class="form-control" placeholder="Input Number Of Guest" id="colFormLabel" name="bprorng" style="width: 380px;">
          </div>
          <div class="col position-relative" style="right: 10rem">
              <label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">Room Type :</label>
            <select required class="form-control form-select" name="fasilitaskamar_id" id="fasilitaskamar_id" style="width: 380px;">
              <option selected disabled>Choose Room Type</option>
              @foreach ($fasilitaskamar as $item)
              <option value="{{ $item->id }}">{{ $item->tipekamar }}</option>
              @endforeach
          </select>
          </div>

          <div class="row g-2">
            <div class="col">
            <label for="colFormLabel" class="form-label col-form-label">First Name :</label>
              <input type="text" class="form-control" placeholder=" Input your first name" aria-label="First name" name="firstname" style="width: 380px;">
            </div>
            <div class="col position-relative" style="right: 10rem">
              <label for="colFormLabel" class="form-label col-form-label">Last Name :</label>
              <input type="text" class="form-control" placeholder="Input your last name" aria-label="Last name" name="lastname" style="width: 380px;">
            </div>
        </div>

        <div class="row g-2">
          <div class="col">
            <label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">Email :</label>
            <input type="email" class="form-control" id="colFormLabel" placeholder="Input Your Email" name="email" style="width: 380px;">
          </div>
          <div class="col position-relative" style="right: 10rem">
            <label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">No Telp :</label>
            <input type="number" class="form-control" id="colFormLabel" placeholder="Input Your Number Phone" name="notelp" style="width: 380px;">
          </div>
        </div>
        <div class="col">
          <label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">Special Request (Optional)</label>
          <div class="form-floating">
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" style="height: 100px;width: 780px;" name="spesialrequest" ></textarea>
            <label for="floatingTextarea">Special Request</label>
          </div>
        </div>
        <div class="row g-2">
          <div class="col">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Tgl. Check In</label>
            <input type="date" class="form-control" id="colFormLabel" placeholder="col-form-label" name="tanggal_checkin" style="width: 380px;">
          </div>
          <div class="col position-relative" style="right: 10rem">
            <label for="colFormLabel" class="col-sm-2 col-form-label" style="width: 300px">Tgl Check Out</label>
            <input type="date" class="form-control" id="colFormLabel" placeholder="col-form-label" name="tanggal_checkout" style="width: 380px;">
          </div>
        </div>
        <button type="submit" class="btn-book mt-4" style="background-color: #dd9b0b;
        padding: 3px 25px;height: 40px;width: 100px;border-radius: 5px;border:none;color:#fff;margin-left:20rem">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </div>

    <footer>
        <div class="footer-atas">
         <div class="footer-group">
           <div class="footer-logo">
             <img src="{{ asset('img/logohotel.png') }}" alt="">
           </div>
           <div class="footer-menu">
             <a href="" class="text-dark">OFFERS</a>
             <a href="" class="text-dark">EVENTS</a>
             <a href="" class="text-dark">About Us</a>
             <a href="" class="text-dark">Room</a>
             <a href="" class="text-dark">Contact Us</a>
           </div>
           <div class="footer-sosmed">
             <img src="{{ asset('img/instagram.png') }}" alt="">
             <img src="{{ asset('img/twitter.png') }}" alt="">
             <img src="{{ asset('img/facebook.png') }}" alt="">
           </div>
         </div>
        </div>
        <div class="line-footer mt-3" style="width: 100wh;height:1px;background:rgba(51, 51, 51, 0.178)"></div>
        <div class="footer-bawah">
         <div class="fb-left">
           <p>All rights reserved, 2022   Privacy</p>
         </div>
         <div class="fb-right">
           <p>Terms of use</p>
         </div>
        </div>
       </footer>

    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>