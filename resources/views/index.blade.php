<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hotel Westore</title>
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
    <div class="text-content">
      <div class="text-kiri">
        <h1>Inimitable Legend Of Hotel & Resort</h1>
      </div>
      <div class="text-kanan">
        <p>Established with over 5 years in the luxury hotel industy, Westor's commitment is to enrich every stay wit fulfilling and memorable experiences to take your traveling journey.</p>
        <a href="">MORE INFO</a>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>