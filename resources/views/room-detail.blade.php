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
            <img src="{{ asset('img/bedroom3.png') }}" alt="">
        </div>
        <div class="crd-title">
            <div class="crdt-content">
                <div class="crdtc-isi">
                        <h1>Type Deluxe</h1>
                        <button type="button" class="btn-book mt-0"><a href="/create-rb">Book Now</a></button>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container-content">
        <div class="rd-content">
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


    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>