<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{asset('https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('https://use.fontawesome.com/releases/v5.8.2/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
<link rel="stylesheet" href="{{asset('/frontend/css/main.css')}}">
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('/assets2/vendors/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{('../assets2/vendors/css/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{asset('/assets2/vendors/flag-icon-css/css/flag-icon.min.css')}}">
  <link rel="stylesheet" href="{{asset('/assets2/vendors/jvectormap/jquery-jvectormap.css')}}">
  <!-- End plugin css for this page -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="{{asset('/assets2/css/demo/style.css')}}">
</head>
<body>
    <body>
        @include('inc.navbar')
        <div class="container">
          <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                {{-- <h3 class="text-center">Dive right back In</h3> --}}
              <div class="card card-signin my-5">
                <div class="card-body">
                  <h5 class="card-title text-center">Login</h5>
                  <form class="form-signin" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-label-group">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                      <label for="email">Email address</label>
                      @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                    </div>
      
                    <div class="form-label-group">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                      <label for="password">Password</label>
                      @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check custom-control custom-checkbox mb-3">
                                <input class="custom-control-input form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="custom-control-label" for="remember">Remember password</label>
                            </div>
                        </div>
                    </div>
    
                    <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sign in</button>
                    {{-- <hr class="my-4"> --}}
                    {{-- <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> Sign in with Google</button> --}}
                    {{-- <button class="btn btn-lg btn-facebook btn-block text-uppercase" role="link" type="submit"><i class="fab fa-facebook-f mr-2"></i> <a href="/login/facebook" > Sign in with Facebook</a></button> --}}
                    <div class="row">
                    @if (Route::has('password.request'))
                    <a class="col-md-6 btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
                  <a href="/register" class="col-md-6 btn btn-link">Don't have an account</a>
                </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
</html>