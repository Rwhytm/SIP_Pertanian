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
  

{{-- Utama --}}

{{-- {{ dd($transaksi[0]->nomor_transaksi) }} --}}
  <div class="wrapper">
    <div class="content">					<div class="invoice-wrapper rounded border bg-white py-5 px-3 px-md-4 px-lg-5">
      <div class="d-flex justify-content-between">
        <h2 class="text-dark font-weight-medium">Invoice #{{ $transaksi[0]->nomor_transaksi }}</h2>
        {{-- <div class="btn-group">
          <form action="{{ route('bikin pdf',$transaksi[0]->nomor_transaksi) }}" method="GET">
          <button type="submit" class="btn btn-sm btn-secondary">
            @csrf
            <i class="mdi mdi-content-save"></i> Save</button>
          </form>
          <button class="btn btn-sm btn-secondary">
            <i class="mdi mdi-printer"></i> Print</button>
        </div> --}}
      </div>
      <div class="row pt-5">
        <div class="col-xl-3 col-lg-4">
          <p class="text-dark mb-2">Dari</p>
          <address>
            Fakultas Pertanian Universitas Bengkulu
            <br> Beringin Raya, Kec. Muara Bangka Hulu, Kota Bengkulu, Bengkulu 38119
            <br> Email: faperta@unib.ac.id
            <br> Phone: +62 736 21290 / 21170
          </address>
        </div>
        <div class="col-xl-3 col-lg-4">
          <p class="text-dark mb-2">Ke</p>
          <address>
            {{ $transaksi[0]->user_id }}
            <br> #
            <br> #
            <br> #
          </address>
        </div>
        <div class="col-xl-3 col-lg-4">
          <p class="text-dark mb-2">Rincian</p>
          <address>
            Nomor Transaksi:
            <span class="text-dark">{{ $transaksi[0]->nomor_transaksi }}</span>
            <br> {{ $transaksi[0]->created_at }}
          </address>
        </div>
      </div>
      <table class="table mt-3 table-striped table-responsive table-responsive-large" style="width:100%">
        <thead>
          <tr>
            <th>#</th>
            <th>Barang</th>
            <th>Jumlah</th>
            <th>Harga per satuan</th>
            <th>Total</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($transaksi as $t)
              
          <tr>
            <td>{{ 1 }}</td>
            <td>{{ $t->produk_id }}</td>
            <td>{{ $t->jumlah }}</td>
            <td>Rp. {{ number_format($t->total/$t->jumlah) }}</td>
            <td>Rp. {{ number_format($t->total) }}</td>
            {{-- <td>$3.999,00</td> --}}
          </tr>
          @endforeach
          
        </tbody>
      </table>
      <div class="row justify-content-end">
        <div class="col-lg-5 col-xl-4 col-xl-3 ml-sm-auto">
          <ul class="list-unstyled mt-4">
            <li class="mid pb-3 text-dark"> Subtotal
              <span class="d-inline-block float-right text-default">Rp. {{ number_format($t->sum('total')) }}</span>
            </li>
            {{-- <li class="mid pb-3 text-dark">Vat(10%)
              <span class="d-inline-block float-right text-default">$789,70</span>
            </li> --}}
            <li class="pb-3 text-dark">Total
              <span class="d-inline-block float-right">Rp. {{ number_format($t->sum('total')) }}</span>
            </li>
          </ul>
          <a href="{{ url()->previous() }}" class="btn btn-block mt-2 btn-lg btn-primary btn-pill"> Kembali</a>
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
