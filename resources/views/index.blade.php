<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hotel Westore</title>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  </head>
  <body>

    <nav class="position-fixed">
        <div class="logo">
            <a href=""><img src="{{ asset('img/logohotel.png') }}" alt="" width="200px"></a>
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

    <div class="main-hero">
        <div class="textnya">
            <h1>Discover Deals Hotel & Resort in Westor</h1>
            <p class="fw-lighter mt-3">We bring you together with your dream hotel</p>
            <button type="button" class="btn-book mt-2">Booking Now</button>
        </div>
        <div class="imagenya">
            <img src="{{ asset('img/hotel-with-tv.jpg') }}" alt="" width="550px" height="350px">
        </div>
    </div>

    <div class="text">
      <div class="text-content">
        <div class="text-kiri">
          <h1>Inimitable Legend Of Hotel & Resort</h1>
        </div>
        <div class="text-kanan">
          <p>Established with over 5 years in the luxury hotel industy, Westor's commitment is to enrich every stay wit fulfilling and memorable experiences to take your traveling journey.</p>
          <a href="">MORE INFO</a>
        </div>
      </div>
    </div>

    <div class="list-img">
      <div class="img">
        <div class="img-1">
          <img src="{{ asset('img/bathroom.png') }}" alt="">
        </div>
        <div class="img-1">
          <img src="{{ asset('img/courtyard.png') }}" alt="">
        </div>
      </div>
        <div class="img">
          <div class="img-1">
            <img src="{{ asset('img/hallwood.png') }}" alt="">
          </div>
          <div class="img-1">
            <img src="{{ asset('img/livingroom.png') }}" alt="">
          </div>
        </div>
    </div>

    <div class="room-nav">
      <div class="room-left">
        <h1>Rooms Availibility</h1>
      </div>
      <div class="room-right">
        <button type="button" class="btn-book mt-2"><a href="/room">All Rooms</a></button>
      </div>
    </div>

    <div class="card-room">
      <div class="list-room">
        <div class="spek-room">
          <img src="{{ asset('img/bedroom1.jpg') }}" alt="">
          <h1>COMFORT ROOM WITH BALCONY</h1>
          
          <div class="text-room">
            <p>50m2</p>
            <p>2 Beds</p>
            <p>1 Bedroom</p>
            <p>Balcony</p>
          </div>
          <a href="">See Detail</a>

          <div class="price-room">
            <div class="price-left">
              <h1>Start From $1000/Night</h1>
            </div>
            <button type="button" class="btn-book mt-2">Check Availibility</button>
          </div>
        </div>
        <div class="spek-room">
          <img src="{{ asset('img/bedroom1.jpg') }}" alt="">
          <h1>COMFORT ROOM WITH BALCONY</h1>
          
          <div class="text-room">
            <p>50m2</p>
            <p>2 Beds</p>
            <p>1 Bedroom</p>
            <p>Balcony</p>
          </div>
          <a href="">See Detail</a>

          <div class="price-room">
            <div class="price-left">
              <h1>Start From $1000/Night</h1>
            </div>
            <button type="button" class="btn-book mt-2">Check Availibility</button>
          </div>
        </div>
        <div class="spek-room">
          <img src="{{ asset('img/bedroom1.jpg') }}" alt="">
          <h1>COMFORT ROOM WITH BALCONY</h1>
          
          <div class="text-room">
            <p>50m2</p>
            <p>2 Beds</p>
            <p>1 Bedroom</p>
            <p>Balcony</p>
          </div>
          <a href="">See Detail</a>

          <div class="price-room">
            <div class="price-left">
              <h1>Start From $1000/Night</h1>
            </div>
            <button type="button" class="btn-book mt-2">Check Availibility</button>
          </div>
        </div>
      </div>
    </div>

    <h1 class="judul">The Scott Resort & Spa is an ode to discovert, a love letter to live lived on the borderlands</h1>

    <div class="swu">

      <div class="swu-left">
        <h1>Stay With Us</h1>
        <p>A sanctuary set against Scottdale's historic downtown.</p>

        <div class="swu-group">
          <div class="swu-isi">
            <div class="sg-left">
              <h1>Pool View Room</h1>
            </div>
            <div class="sg-right">
              <h1>+</h1>
            </div>
          </div>
          <div class="swu-isi">
            <div class="sg-left">
              <h1>Lagoon View Room</h1>
            </div>
            <div class="sg-right">
              <h1>-</h1>
            </div>
          </div>
          <div class="swu-isi">
            <div class="sg-left">
              <h1>Cortyard Room</h1>
            </div>
            <div class="sg-right">
              <h1>-</h1>
            </div>
          </div>
          <div class="swu-isi">
            <div class="sg-left">
              <h1>Suites Room</h1>
            </div>
            <div class="sg-right">
              <h1>-</h1>
            </div>
          </div>
        </div>
      </div>

      <div class="swu-right">
        <img src="{{ asset('img/livingroom2.png') }}" alt="">
      </div>
    </div>


    <div class="events">
      <h1 class="judul-2">Upcomming Events</h1>
      <div class="card-list">

        <div class="card-events">
          <img src="{{ asset('img/sharing.png') }}" alt="">
          <h1>SHARING IS CARING</h1>
          <div class="date">
            <div class="date-icon">
              <img src="{{ asset('img/calendar.png') }}" alt="">
              <h4>7 Oktober 2022</h4>
              <img src="{{ asset('img/clock.png') }}" alt="">
              <h4>3:00 - 5:00</h4>
            </div>
          </div>
          <a href="">See Detail</a>
        </div>

        <div class="card-events">
          <img src="{{ asset('img/romantic-dinner.png') }}" alt="">
          <h1>Romantic Dinner</h1>
          <div class="date">
            <div class="date-icon">
              <img src="{{ asset('img/calendar.png') }}" alt="">
              <h4>8 Oktober 2022</h4>
              <img src="{{ asset('img/clock.png') }}" alt="">
              <h4>3:00 - 5:00</h4>
            </div>
          </div>
          <a href="">See Detail</a>
        </div>

        <div class="card-events">
          <img src="{{ asset('img/party-room.png') }}" alt="">
          <h1>Party Room</h1>
          <div class="date">
            <div class="date-icon">
              <img src="{{ asset('img/calendar.png') }}" alt="">
              <h4>9 Oktober 2022</h4>
              <img src="{{ asset('img/clock.png') }}" alt="">
              <h4>3:00 - 5:00</h4>
            </div>
          </div>
          <a href="">See Detail</a>
        </div>
      </div>
     <div class="ce-button">
      <button id="sa-button" type="button" class="btn-book mt-5">See All Events</button>
     </div>
    </div>

    <footer>
     <div class="footer-atas">
      <div class="footer-group">
        <div class="footer-logo">
          <img src="{{ asset('img/logohotel.png') }}" alt="">
        </div>
        <div class="footer-menu">
          <a href="">OFFERS</a>
          <a href="">EVENTS</a>
          <a href="">About Us</a>
          <a href="">Room</a>
          <a href="">Contact Us</a>
        </div>
        <div class="footer-sosmed">
          <img src="{{ asset('img/instagram.png') }}" alt="">
          <img src="{{ asset('img/twitter.png') }}" alt="">
          <img src="{{ asset('img/facebook.png') }}" alt="">
        </div>
      </div>
     </div>

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