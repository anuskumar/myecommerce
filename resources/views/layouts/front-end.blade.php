<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title> @yield('title','Shop Homepage / Ecommerce Project').{{ config('app.name') }} </title>

  <!-- Bootstrap core CSS -->
  <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>

<body>

  <!-- Navigation -->
   @include('inc._navbar')

  <!-- Page Content -->
  <div class="container">

    <div class="row">

     @includeWhen($sidebar,'inc._sidebar')


      <div class="col-lg-9">



        @yield('content')

      </div>
      <!-- /.col-lg-9 -->

    </div>


  </div>


  <!-- Footer -->

  @include('inc._footer')

  <!-- Bootstrap core JavaScript -->
  <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>
