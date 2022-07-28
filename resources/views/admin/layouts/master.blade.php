<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <?php
  $siteinformation = App\Models\GlobalSetting::first();
   ?>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="">
  <meta name="csrf-token" content="{{ csrf_token() }}" />


  <title>{{ $siteinformation->site_name }} - Admin</title>

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

  {{-- <link id="sleek-css" rel="stylesheet" href="http://127.0.0.1:8070/assets/css/sleek.css" />
  <link id="sleek-css" rel="stylesheet" href="{{ url('/assets/css/sleek.css') }}" /> --}}

  <!-- FAVICON -->
  <link href="{{ url('/').'/'.$siteinformation->favicon }}" rel="shortcut icon" />

  <!-- Custom Style -->
  {{ Html::style('backend/assets/style.css')}}

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





  <div class="wrapper">


            <!--
          ====================================
          ——— LEFT SIDEBAR WITH FOOTER
          =====================================
        -->
                @include('admin.layouts.admin_sidenav')


    <div class="page-wrapper">
                <!-- Header -->
                @include('admin.layouts.admin_nav')


                <div class="content-wrapper">
                  <div class="content">

                    @yield('content')

                  </div>




                </div>

                 @include('admin.layouts.admin_footer')

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
