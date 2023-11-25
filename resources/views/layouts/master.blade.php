<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Md Abdullah Shake</title>
  {{-- <!-- ----- Fav Icone ------  --> --}}
  <link rel="icon" type="image/x-icon" href="/img/fav.png">
  {{-- <!-- bootstrap  --> --}}
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  {{-- <!-- font awsome  --> --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

  {{-- <!-- wow animation  --> --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

  <link rel="stylesheet" href="{{asset('css')}}/style.css">
  <link rel="stylesheet" href="{{asset('css')}}/responsive.css">

</head>

<body>
  {{-- <!-- ------------ Top Header Section --------------- --> --}}
    @include('components.header')

  {{-- <!-- Portfolio section  --> --}}
  @yield('project')
  {{-- <!-- Portfolio section  --> --}}

  <br><br>

  {{-- ------------- home --------------  --}}
  @yield('home')
  {{-- ------------- home --------------  --}}
  {{-- - ------------- Education & Skills section------------  --}}
        @yield('education')

  {{-- <!-- ============contact us section start =========== --> --}}
  <br><br>
        @yield('contact')

  {{-- <!-- ---contact section end----  --> --}}

  {{-- <!-- ---newsletter section start ----  --> --}}
  @include('components.newletter')


  {{-- <!-- ======== footer section start ========= --> --}}

@include('components.footer')


  {{-- <!-- ------------------------------------------------------------ --> --}}
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/typed.js@2.0.15/dist/typed.umd.js"></script>
  <script src="{{asset('js')}}/app.js"></script>

  <script>
    new WOW().init();
  </script>
</body>

</html>
