<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="Sleek Dashboard - Free Bootstrap 4 Admin Dashboard Template and UI Kit. It is very powerful bootstrap admin dashboard, which allows you to build products like admin panels, content management systems and CRMs etc.">
  
  
  <title>{{ config('app.name') }}</title>
  
  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500" rel="stylesheet" />
  <link href="https://cdn.materialdesignicons.com/4.4.95/css/materialdesignicons.min.css" rel="stylesheet" />
  
  
  <!-- PLUGINS CSS STYLE -->
  <link href="{{ URL::asset('admin/assets/plugins/nprogress/nprogress.css') }}" rel="stylesheet" />
  
  
  
  <!-- No Extra plugin used -->
  
  
  
  <link href="{{ URL::asset('admin/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css') }}" rel="stylesheet" />
  
  
  
  <link href="{{ URL::asset('admin/assets/plugins/daterangepicker/daterangepicker.css') }}" rel="stylesheet" />
  
  
  
  <link href="{{ URL::asset('admin/assets/plugins/toastr/toastr.min.css') }}" rel="stylesheet" />
  
  
  
  <!-- SLEEK CSS -->
  <link id="sleek-css" rel="stylesheet" href="{{URL::asset('admin/assets/css/sleek.css') }}" />
  
  <!-- FAVICON -->
  <link href="{{ URL::asset('users/assets/img/thumb-300x300.png')}}" rel="shortcut icon" />
  
  
  
  <!--
    HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
  -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="{{ URL::asset('admin/assets/plugins/nprogress/nprogress.js') }}"></script>
  </head>
  
  
  <body class="header-fixed sidebar-fixed sidebar-dark header-light" id="body">
    
    <script>
      NProgress.configure({ showSpinner: false });
      NProgress.start();
    </script>
    
    
    <div class="wrapper">
      <div class="content-wrapper">
        
        <div class="content">							
          <div class="bg-white border rounded">
            <div class="profile-content-left pt-5 pb-3 px-3 px-xl-5">
              <div class="card text-center widget-profile px-0 border-0">
                <div class="card-body">
                  <h4 class="py-2 text-dark">{{Auth::user()->nama}}</h4>
                  <p>{{Auth::user()->email}}</p>
                  
                </div>
              </div>
              
              <hr class="w-100">
              <div class="contact-info pt-2 pb-3 px-3 px-xl-5">
                <h3 class="text-dark mb-1">Informasi</h3>
                <p class="text-dark font-weight-medium pt-4 mb-2">Alamat email</p>
                <p>{{Auth::user()->email}}</p>
                <p class="text-dark font-weight-medium pt-4 mb-2">Nomor HP</p>
                <p>{{Auth::user()->nomor_hp}}</p>
                <p class="text-dark font-weight-medium pt-4 mb-2">Alamat</p>
                <p>{{Auth::user()->alamat}}</p>
              </div>
            </div>
            
            
          </div>
        </div>
      </div>
      <script src="{{ URL::asset('admin/assets/plugins/jquery/jquery.min.js') }}"></script>
      <script src="{{ URL::asset('admin/assets/plugins/slimscrollbar/jquery.slimscroll.min.js') }}"></script>
      <script src="{{ URL::asset('admin/assets/plugins/jekyll-search.min.js') }}"></script>
      
      
      
      <script src="{{ URL::asset('admin/assets/plugins/charts/Chart.min.js') }}"></script>
      
      
      
      <script src="{{ URL::asset('admin/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js') }}"></script>
      <script src="{{ URL::asset('admin/assets/plugins/jvectormap/jquery-jvectormap-world-mill.js') }}"></script>
      
      
      
      <script src="{{ URL::asset('admin/assets/plugins/daterangepicker/moment.min.js') }}"></script>
      <script src="{{ URL::asset('admin/assets/plugins/daterangepicker/daterangepicker.js') }}"></script>
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
      
      
      
      <script src="{{ URL::asset('admin/assets/plugins/toastr/toastr.min.js') }}"></script>
      
      
      
      <script src="{{ URL::asset('admin/assets/js/sleek.bundle.js') }}"></script>
    </body>
    
    </html>