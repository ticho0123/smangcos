<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>{{config('app.name')}}</title>
    <link rel="shortcut icon" href="/template/img/logo.png" />
    <!-- Bootstrap core CSS -->
<link href="/template/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .active-custom {
         border-bottom: 3px solid black;
      }

      .carousel-inner > .item > img {
        height:100vh;
        object-fit: contain;
      }


      .carousel-caption {
        transform: translateY(-50%);
        bottom:0;
        top:50%;
      }

      .background-1 {
        background: url('{{url('/')}}/template/iklan/iklan.png');
        background-size: cover;
        width:100%
      }

      .background-2 {
        background: url('{{url('/')}}/template/iklan/iklan-2.jpeg');
        background-size: cover;
        width:100%
      }

      .rotate90 {
          -webkit-transform: rotate(-90deg);
          -moz-transform: rotate(-90deg);
          -o-transform: rotate(-90deg);
          -ms-transform: rotate(-90deg);
          transform: rotate(-90deg);
      }
      .footer {
      background: black;
      width: 100%;
      margin: auto;
      text-align: center;
      color: white;
      font-size: 14px;
      padding: 20px 0px;
      margin-top: 180px;
      margin-bottom: 20px;
      }

      .footer a {
      color: white;
      }

    </style>
    <!-- Custom styles for this template -->
    <link href="/template/carousel.css" rel="stylesheet">
  </head>
  <body>
    <header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-white text-dark">
    <a class="navbar-brand text-dark" href="#">
      <img src="/template/img/logo.png" width="250" />
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item mt-2">
          <a class="nav-link text-dark @if(Request::segment(1) == '' OR Request::segment(1) == 'home' ) active-custom @endif font-weight-bold" href="{{route('awal')}}">Beranda <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item mt-2">
          <a class="nav-link text-dark @if(Request::segment(1) == 'katalog') active-custom @endif font-weight-bold" href="{{route('katalog')}}">Katalog</a>
        </li>
        <li class="nav-item mt-2 mr-2">
          <a class="nav-link text-dark @if(Request::segment(1) == 'tentang') active-custom @endif font-weight-bold" href="{{route('tentang')}}">Tentang</a>
        </li>
        <form class="form-inline mt-2 mt-md-0 mr-2">
          <input class="form-control mr-sm-1" type="text" placeholder="Mau Cari Apa ?" aria-label="Search">
          <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Cari</button>
        </form>
        <li class="nav-item border-left border-3">
          <a class="nav-link text-dark" href="{{route('profiles')}}" tabindex="-1" aria-disabled="true">
            <img src="/template/img/user.png" class="img-fluid img-responsive" width="40" alt="">
          </a>
        </li>
      </ul>

    </div>
  </nav>
</header>

<main role="main">
<div class="mt-4"></div>
@yield('content')
  <!-- FOOTER -->
  <!-- <div class="pt-5"></div> -->
  <footer class="footer">
        <p>copyright©️smangcoteam</p>
        <a href="mailto:smangcoteam228@gmail.com">smangcoteam228@gmail.com</a>
    </footer>
</main>
      <script src="jquery-3.5.1.slim.min.js"></script>
      <script src="/template/js/bootstrap.bundle.min.js"></script>
</html>
