<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ __('login') }}</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ URL::asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ URL::asset('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ URL::asset('assets/dist/css/adminlte.min.css') }}">
</head>
<body class="hold-transition login-page">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a class="h1">    <b>{{ env('app_name') }}</b>Brands V1.5</a>
            </div>
            <div class="card-body">
                @if(session()->has('message'))
                <span>{{ session()->get('message') }}</span>
            @endif

            @if(session()->has('email'))
            <span>{{ session()->get('email') }}</span>
        @endif

                                <p class="login-box-msg">{{ __('tran.msglogin') }}</p>
                                        <form method="POST" action="{{ route('brand.login') }}">
                                            @csrf
                                            <div class="input-group mb-3">
                                                <input type="email"  id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"  placeholder="{{ __('Email') }}" autofocus>
                                                <div class="input-group-append">
                                                    <div class="input-group-text">
                                                        <span class="fas fa-envelope"></span>
                                                    </div>
                                                </div>
                                              
                                                {{-- @error('email') --}}
                                                @if ($errors->has('email'))

                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{  $errors->first('email') }}</strong>
                                                </span>
                                                @endif
                                            {{-- @enderror --}}
                                            </div>

                                            <div class="input-group mb-3">
                                                <input type="password"   id="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="{{ __('Password') }}">
                                                <div class="input-group-append">
                                                    <div class="input-group-text">
                                                        <span class="fas fa-lock"></span>
                                                    </div>
                                                </div>
                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>

                                            <div class="row">
                                                <div class="col-8">
                                                    <div class="icheck-primary">
                                                        <input type="checkbox" id="remember"  name="remember" {{ old('remember') ? 'checked' : '' }}>
                                                        <label for="remember">
                                                            {{ __('Remember Me') }}
                                                        </label>
                                                    </div>
                                                </div>
                                                <!-- /.col -->
                                                <div class="col-4">
                                                    <button type="submit" class="btn btn-primary btn-block">  {{ __('Login') }}</button>
                                                </div>
                                                <!-- /.col -->
                                            </div>


                                        </form>
                                        <p class="mb-1">
                                            @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
                                        </p>
                                        <p class="mb-0">
                                            @if (Route::has('register'))
                                            <a   class="btn btn-link" href="{{ route('register') }}" class="text-center">{{ __('Register') }}</a>
                                            @endif
                                        </p>

                    </div>


        </div>

        {{-- <a class="dropdown-item" href="{{ route('brand.logout') }}" onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
        {{ __('Logout') }}
      </a>

      <form id="logout-form" action="{{ route('brand.logout') }}" method="POST" class="d-none">
         @csrf
      </form> --}}
    </div>

<script src="{{ URL::asset('assets/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ URL::asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ URL::asset('assets/dist/js/adminlte.min.js') }}"></script>
</body>
</html>
