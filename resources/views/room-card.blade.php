<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hotel Westore</title>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style-rc.css') }}">
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


    <div class="container-room">

        <div class="room-card">
            <div class="room-nav">
                <div class="rn-left">
                    <h1>Type Deluxe</h1>
                </div>
                <div class="rn-right">
                    <h1>Adventages</h1>
                    <h1>Capacity</h1>
                    <h1>Price</h1>
                </div>
            </div>
            <div class="room-content">
                <div class="rc-left">
                    <img src="{{ asset('img/bedroom1.jpg') }}" alt="">
                    <button type="button" class="btn-book mt-4.2"><a href="/room-detail">Room Detail</a></button>
                </div>
                <div class="rc-right">
                    <div class="rcr-nav">
                        <div class="rd">
                            <h1>Room Details</h1>
                        </div>
                        <div class="rp">
                            <div class="rp-cek">
                                <h1>IDR 350.000</h1>
                                <img src="{{ asset('img/correct.png') }}" alt="">
                            </div>
                            <p>/room/night</p>
                        </div>
                    </div>
                    <div class="rcr-content">
                        <div class="rcrc-left">
                            <div class="rcrcl-content">
                                <img src="{{ asset('img/wifi.png') }}" alt="">
                                <h1>WIFI</h1>
                            </div>
                            <div class="rcrcl-content">
                                <img src="{{ asset('img/furniture.png') }}" alt="">
                                <h1>2 Beds</h1>
                            </div>
                        </div>
                        <div class="rcrc-right">
                            <div class="rcrcl-content">
                                <img src="{{ asset('img/man.png') }}" alt="">
                                <h1>Max 2 Adult</h1>
                            </div>
                            <div class="rcrcl-content">
                                <img src="{{ asset('img/man.png') }}" alt="">
                                <h1>Max 2 Child</h1>
                            </div>
                        </div>
                    </div>
                    <div class="button-bn">
                        <button type="button" class="btn-book mt-3"><a href="/room">Book Now</a></button>
                    </div>
                </div>
            </div>
        </div>

        <div class="room-card">
            <div class="room-nav">
                <div class="rn-left">
                    <h1>Type Deluxe</h1>
                </div>
                <div class="rn-right">
                    <h1>Adventages</h1>
                    <h1>Capacity</h1>
                    <h1>Price</h1>
                </div>
            </div>
            <div class="room-content">
                <div class="rc-left">
                    <img src="{{ asset('img/bedroom1.jpg') }}" alt="">
                    <button type="button" class="btn-book mt-4.2"><a href="/room-detail">Room Detail</a></button>
                </div>
                <div class="rc-right">
                    <div class="rcr-nav">
                        <div class="rd">
                            <h1>Room Details</h1>
                        </div>
                        <div class="rp">
                            <div class="rp-cek">
                                <h1>IDR 350.000</h1>
                                <img src="{{ asset('img/correct.png') }}" alt="">
                            </div>
                            <p>/room/night</p>
                        </div>
                    </div>
                    <div class="rcr-content">
                        <div class="rcrc-left">
                            <div class="rcrcl-content">
                                <img src="{{ asset('img/wifi.png') }}" alt="">
                                <h1>WIFI</h1>
                            </div>
                            <div class="rcrcl-content">
                                <img src="{{ asset('img/furniture.png') }}" alt="">
                                <h1>2 Beds</h1>
                            </div>
                        </div>
                        <div class="rcrc-right">
                            <div class="rcrcl-content">
                                <img src="{{ asset('img/man.png') }}" alt="">
                                <h1>Max 2 Adult</h1>
                            </div>
                            <div class="rcrcl-content">
                                <img src="{{ asset('img/man.png') }}" alt="">
                                <h1>Max 2 Child</h1>
                            </div>
                        </div>
                    </div>
                    <div class="button-bn">
                        <button type="button" class="btn-book mt-3"><a href="/room">Book Now</a></button>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="room-card">
            <div class="room-nav">
                <div class="rn-left">
                    <h1>Type Deluxe</h1>
                </div>
                <div class="rn-right">
                    <h1>Adventages</h1>
                    <h1>Capacity</h1>
                    <h1>Price</h1>
                </div>
            </div>
            <div class="room-content">
                <div class="rc-left">
                    <img src="{{ asset('img/bedroom1.jpg') }}" alt="">
                    <button type="button" class="btn-book mt-4.2"><a href="/room-detail">Room Detail</a></button>
                </div>
                <div class="rc-right">
                    <div class="rcr-nav">
                        <div class="rd">
                            <h1>Room Details</h1>
                        </div>
                        <div class="rp">
                            <div class="rp-cek">
                                <h1>IDR 350.000</h1>
                                <img src="{{ asset('img/correct.png') }}" alt="">
                            </div>
                            <p>/room/night</p>
                        </div>
                    </div>
                    <div class="rcr-content">
                        <div class="rcrc-left">
                            <div class="rcrcl-content">
                                <img src="{{ asset('img/wifi.png') }}" alt="">
                                <h1>WIFI</h1>
                            </div>
                            <div class="rcrcl-content">
                                <img src="{{ asset('img/furniture.png') }}" alt="">
                                <h1>2 Beds</h1>
                            </div>
                        </div>
                        <div class="rcrc-right">
                            <div class="rcrcl-content">
                                <img src="{{ asset('img/man.png') }}" alt="">
                                <h1>Max 2 Adult</h1>
                            </div>
                            <div class="rcrcl-content">
                                <img src="{{ asset('img/man.png') }}" alt="">
                                <h1>Max 2 Child</h1>
                            </div>
                        </div>
                    </div>
                    <div class="button-bn">
                        <button type="button" class="btn-book mt-3"><a href="/room">Book Now</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>