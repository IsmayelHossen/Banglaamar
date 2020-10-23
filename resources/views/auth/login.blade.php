

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
            <img alt="logo" src="{{asset('public/admin')}}/images/logo-dark.png" />
        </div>
        <div class="box">
            <!--SIGN IN FORM-->
            <div class="panel mb-none">
                <div class="panel-content bg-scale-0">
                   <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group mt-md">
                        

                            <span class="input-with-icon">
                                <input type="number" class="form-control @error('phone') is-invalid @enderror" name="phone" placeholder="phone">
                                <i class="fa fa-mobile"></i>
                            </span>

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group">
                            <span class="input-with-icon">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                <i class="fa fa-key"></i>
                            </span>
                            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group">
                            <div class="checkbox-custom checkbox-primary">
                                <input type="checkbox" id="remember-me" value="option1" checked>
                                <label class="check" for="remember-me">Remember me</label>
                            </div>
                        </div>
                        <div class="form-group">
                           
                             <button type="submit" class="btn btn-primary btn-block">
                                    {{ __('Login') }}
                                </button>
                        </div>
                        <div class="form-group text-center">
                            <a href="pages_forgot-password.html">Forgot password?</a>
                            <hr/>
                             <span>Don't have an account?</span>
                            <a href="" class="btn btn-block mt-sm">Register</a>
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

