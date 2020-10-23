

<!doctype html>
<html lang="en" class="fixed accounts sign-in">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Helsinki</title>
    <link rel="apple-touch-icon" sizes="120x120"  href="{{ asset('public/admin/favicon/apple-icon-120x120.png ')}}">
<link rel="icon" type="image/png" sizes="192x192" href="{{ asset('public/admin/favicon/android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32"href="{{ asset('public/admin/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16"href="{{ asset('public/admin/favicon/favicon-16x16.png')}}">
    <!--BASIC css-->
    <!-- ========================================================= -->
    <link rel="stylesheet" href="{{ asset('public/admin/vendor/bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{asset('public/admin/vendor/font-awesome/css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{asset('public/adminvendor/animate.css/animate.css')}}">
    <!--SECTION css-->
    <!-- ========================================================= -->
    <!--TEMPLATE css-->
    <!-- ========================================================= -->
    <link rel="stylesheet" href="{{asset('public/admin/stylesheets/css/style.css') }}">
</head>

<body>
<div class="wrap">
    <!-- page BODY -->
    <!-- ========================================================= -->
    <div class="page-body animated slideInDown">
        <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
        <!--LOGO-->
        <div class="logo">
            <img alt="logo" src="{{ asset('public/admin')}}/images/logo-dark.png" />
        </div>
        <div class="box">
            <!--SIGN IN FORM-->
            <div class="panel mb-none">
                <div class="panel-content bg-scale-0">
              <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group mt-md">
                            <span class="input-with-icon">
                                <input type="text" class="form-control  @error('name') is-invalid @enderror" id="name" value="{{ old('name')}}" placeholder="Name" name="name"  autofocus>
                                <i class="fa fa-user"></i>
                            </span>
                        </div>
                        @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                 <div class="form-group mt-md">
                            <span class="input-with-icon">
                                <input type="text" class="form-control  @error('phone') is-invalid @enderror" id="phone" value="{{ old('phone')}}"  placeholder="phone" name="phone" pattern="01[1|3|5|6|7|8|9][0-9]{8}"  autofocus>
                                <i class="fa fa-mobile"></i>
                            </span>
                        </div>
                        @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        <div class="form-group mt-md">
                            <span class="input-with-icon">
                                <input type="email" name="email" value="{{ old('email')}}"  class="form-control  @error('email') is-invalid @enderror" id="email" placeholder="Email">
                                <i class="fa fa-envelope"></i>
                            </span>
                        </div>
                                                        @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        <div class="form-group">
                            <span class="input-with-icon">
                                <input type="password" class="form-control  @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password">
                                <i class="fa fa-key"></i>
                            </span>
                        </div>
                         @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        <div class="form-group">
                            <span class="input-with-icon">
                                <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password">
                                <i class="fa fa-key"></i>
                            </span>
                        </div>
                        <div class="form-group">
                            <div class="checkbox-custom checkbox-primary">
                                <input type="checkbox" id="terms" value="option1">
                                <label class="check" for="terms">I agree </label>  to the <a href="#">Terms and Conditions</a>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">
                                    {{ __('Register') }}
                                </button>
                        </div>
                        <div class="form-group text-center">
                            Have an account?, <a href="{{ route('login')}}">Sign In</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
    </div>
</div>
<!--BASIC scripts-->
<!-- ========================================================= -->
<script src="{{ asset('public/admin/vendor/jquery/jquery-1.12.3.min.js')}}"></script>
<script src="{{ asset('public/admin/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('public/admin/vendor/nano-scroller/nano-scroller.j')}}"></script>
<!--TEMPLATE scripts-->
<!-- ========================================================= -->
<script src="{{ asset('public/admin/javascripts/template-script.min.js')}}"></script>
<script src="{{ asset('public/admin/javascripts/template-init.min.js')}}"></script>
<!-- SECTION script and examples-->
<!-- ========================================================= -->
</body>

</html>




