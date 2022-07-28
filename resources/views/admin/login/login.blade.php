<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="">


  <title>Admin - Login</title>

  <!-- GOOGLE FONTS -->
  {{ Html::style('https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500')}}
  {{ Html::style('https://cdn.materialdesignicons.com/4.4.95/css/materialdesignicons.min.css')}}


  <!-- PLUGINS CSS STYLE -->
  {{ Html::style('backend/assets/plugins/nprogress/nprogress.css')}}



  <!-- No Extra plugin used -->



  {{ Html::style('backend/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css')}}



  {{ Html::style('backend/assets/plugins/daterangepicker/daterangepicker.css')}}



  {{ Html::style('backend/assets/plugins/toastr/toastr.min.css')}}



  <!-- SLEEK CSS -->
  {{ Html::style('backend/assets/css/sleek.css')}}

  <link id="sleek-css" rel="stylesheet" href="http://127.0.0.1:8070/assets/css/sleek.css" />

  <!-- FAVICON -->
  <link href="backend/assets/img/favicon.png" rel="shortcut icon" />


  @yield('style')



  <!--
    HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
  -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <script src="backend/assets/plugins/nprogress/nprogress.js"></script>
</head>


<body class="header-fixed sidebar-fixed sidebar-dark header-light" id="body">

  <script>
    NProgress.configure({ showSpinner: false });
    NProgress.start();
  </script>



<div id="toaster"></div>
<?php
$siteinformation = App\Models\GlobalSetting::first();
 ?>

{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}



    <div class="container d-flex align-items-center justify-content-center vh-100">
      <div class="row justify-content-center">
        <div class="col-lg-6 col-md-10">
          <div class="card">
            <div class="card-header bg-primary">
              <div class="app-brand">
                <a href="{{ url('/') }}">
                  <img class="brand-icon" width="33" height="33" src="{{ $siteinformation->favicon }}">
                    
                  <span class="brand-name">{{ $siteinformation->site_name }}</span>
                </a>
              </div>
            </div>

            <div class="card-body p-5">
              <h4 class="text-dark mb-5">Sign In</h4>
              
              <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="row">
                  <div class="form-group col-md-12 mb-4">
                    <input id="email" type="email" class="form-control input-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"  placeholder="Username" autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                  </div>

                  <div class="form-group col-md-12 ">
                    <input id="password" type="password" class="form-control input-lg @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>

                  <div class="col-md-12">
                    <div class="d-flex my-2 justify-content-between">
                      <div class="d-inline-block mr-3">
                        <label class="control control-checkbox">Remember me
                          <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                          <div class="control-indicator"></div>
                        </label>
                      </div>

                      <p><a class="text-blue" href="{{ route('password.request') }}">Forgot Your Password?</a></p>
                    </div>

                    <button type="submit" class="btn btn-lg btn-primary btn-block mb-4">Sign In</button>

                    {{-- <p>Don't have an account yet ?
                      <a class="text-blue" href="sign-up.html">Sign Up</a>
                    </p> --}}
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>


  {{ Html::script('backend/assets/plugins/jquery/jquery.min.js')}}
  {{ Html::script('backend/assets/plugins/slimscrollbar/jquery.slimscroll.min.js')}}
  {{ Html::script('backend/assets/plugins/jekyll-search.min.js')}}


  {{ Html::script('backend/assets/plugins/charts/Chart.min.js')}}



  {{ Html::script('backend/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js')}}
  {{ Html::script('backend/assets/plugins/jvectormap/jquery-jvectormap-world-mill.js')}}



  {{ Html::script('backend/assets/plugins/daterangepicker/moment.min.js')}}
  {{ Html::script('backend/assets/plugins/daterangepicker/daterangepicker.js')}}
<script>
  jQuery(document).ready(function() {
    jQuery('input[name="dateRange"]').daterangepicker({
    autoUpdateInput: false,
    singleDatePicker: true,
    locale: {
      cancelLabel: 'Clear'
    }
  });
    jQuery('input[name="dateRange"]').on('apply.daterangepicker', function (ev, picker) {
      jQuery(this).val(picker.startDate.format('MM/DD/YYYY'));
    });
    jQuery('input[name="dateRange"]').on('cancel.daterangepicker', function (ev, picker) {
      jQuery(this).val('');
    });
  });
</script>

<script>
$(document).ready(function() {
    @if (session()->has('message'))
            var toaster = $('#toaster');

            function callToaster(positionClass) {
            toastr.options = {
                closeButton: true,
                debug: false,
                newestOnTop: false,
                progressBar: true,
                positionClass: positionClass,
                preventDuplicates: false,
                onclick: null,
                showDuration: "300",
                hideDuration: "1000",
                timeOut: "5000",
                extendedTimeOut: "1000",
                showEasing: "swing",
                hideEasing: "linear",
                showMethod: "fadeIn",
                hideMethod: "fadeOut"
            };
            toastr["{{ session()->get('alert-type') }}"]("{{ session()->get('message') }}");
            }

            if(toaster.length != 0){
            if (document.dir != "rtl") {
                callToaster("toast-top-right");
            } else {
                callToaster("toast-top-left");
            }

            }


    @endif

});

</script>

@yield('script')


{{ Html::script('backend/assets/plugins/toastr/toastr.min.js')}}



{{ Html::script('backend/assets/js/sleek.bundle.js')}}
</body>

</html>
