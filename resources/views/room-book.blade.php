<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hotel Westore</title>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style-rb.css') }}">
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


    <div class="container-form">
        <div class="cf-content">
            <div class="cfc-title">
                <h1>Hotel Booking Confirmation</h1>
                <p>Thank you for choosing Longueville Manor for your forthcoming visit to Jersey. It is our pleasure to confirm your reservation as follows:</p>
            </div>
            <div class="cfc-name">
                <div class="row g-3 mt-4">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Nama</label>
                    <div class="col">
                      <input type="text" class="form-control form-control-lg" placeholder="First name" aria-label="First name">
                    </div>
                    <div class="col">
                      <input type="text" class="form-control form-control-lg" placeholder="Last name" aria-label="Last name">
                    </div>
                </div>
            </div>
            <div class="cfc-email mt-4">
                <div class="row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Email</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control form-control-lg" id="colFormLabelLg" placeholder="col-form-label-lg">
                    </div>
                </div>
            </div>
            <div class="cfc-roomtype mt-4">
                <div class="row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Room Type</label>
                <div class="col-sm-10">
                    <select class="form-select form-select-lg" aria-label="Default select example">
                        <option selected>Select Room Type</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                </div>
                </div>
            </div>
            <div class="cfc-datebook mt-4">
                <div class="row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Date</label>
                    <div class="col-sm-10">
                      <input type="date" class="form-control form-control-lg" id="colFormLabelLg" placeholder="col-form-label-lg">
                    </div>
                </div>
            </div>
            <div class="cfc-specreq mt-4">
                <div class="row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Special Request</label>
                    <div class=" col-sm-10 form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                      </div>
                </div>
            </div>
            <div class="cfc-button mt-4">
                    <button type="button" class="btn-book mt-3"><a href="/room-book">Submit</a></button>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>