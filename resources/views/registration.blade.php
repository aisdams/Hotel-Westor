<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Document</title>
</head>
<style>
    .cardnya {
        display: flex
    }
</style>
<body>
    
    <div class="container" id="container">
        <div class="cardnya">
        <div class="login-card1">
            <img src="{{ asset("template/img/logohotel.png") }}" alt="">
        </div>
        <div class="login-card2">
            <h1>Register</h1>
            <form action="{{ route('register.post') }}" method="POST">
                @csrf
                <div class="form-group row">
                  <label for="username" class="form-label">Username</label>
                  <div class="col-12">
                    <input type="text" id="username" class="form-control" name="username" required autofocus>
                    @if ($errors->has('username'))
                        <span class="text-danger">{{ $errors->first('username') }}</span>
                    @endif
                </div>
                </div>

                <div class="form-group row">
                    <label for="notelp" class="col-md-4 col-form-label text-md-right">No Telp</label>
                    <div class="col-12">
                        <input type="number" id="notelp" class="form-control" name="notelp" required autofocus>
                        @if ($errors->has('notelp'))
                            <span class="text-danger">{{ $errors->first('notelp') }}</span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="level">Options</label>
                        <select class="form-select" id="level" name="level"required>
                          <option selected disabled>Choose...</option>
                          <option value="admin">Admin</option>
                          <option value="tamu">Tamu</option>
                          <option value="resepsionis">Resepsionis</option>
                        </select>
                        @if ($errors->has('level'))
                            <span class="text-danger">{{ $errors->first('level') }}</span>
                        @endif
                    </div>
                </div>

                  <div class="form-group row">
                      <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                      <div class="col-12">
                          <input type="text" id="email_address" class="form-control" name="email" required autofocus>
                          @if ($errors->has('email'))
                              <span class="text-danger">{{ $errors->first('email') }}</span>
                          @endif
                      </div>
                  </div>

                  <div class="form-group row">
                      <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                      <div class="col-12">
                          <input type="password" id="password" class="form-control" name="password" required>
                          @if ($errors->has('password'))
                              <span class="text-danger">{{ $errors->first('password') }}</span>
                          @endif
                      </div>
                  </div>

                  <div class="form-group row">
                      <div class="col-12 offset-md-4">
                          <div class="checkbox">
                              <label>
                                  <input type="checkbox" name="remember"> Remember Me
                              </label>
                          </div>
                      </div>
                  </div>

                  <div class="col-12 offset-md-4">
                      <button type="submit" class="btn btn-primary">
                          Register
                      </button>
                  </div>
              </form>
        </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>