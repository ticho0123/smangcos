<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>{{config('app.name')}} | Dashboard Admin</title>

    <!-- Bootstrap core CSS -->
    <link href="/template_admin/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .text-light{
            color: white!important;
        }

        .selected{
            color: black!important;
            background-color: white!important;
        }


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

    </style>
    <!-- Custom styles for this template -->
    <link href="/template_admin/dashboard.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-light sticky-top bg-light flex-md-nowrap p-0 shadow">
    <a class="navbar-brand text-dark" href="/">
      <img src="/template/img/logo.png" width="250" />
    </a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse"
            data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
                <a class="nav-link" href="{{route('logout')}}">Sign out</a>
            </li>
        </ul>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse">
                <div class="sidebar-sticky pt-3 mt-5">
                    <div align="center">
                        <img src="{{asset('storage/'.auth()->user()->image)}}" width="180px" height="180px"
                             onerror="this.onerror=null;this.src='https://www.classifapp.com/wp-content/uploads/2017/09/avatar-placeholder.png';"
                             class="img-responsive rounded-circle" />
                    </div>

                    <ul class="nav flex-column mt-3">
                        <li class="nav-item text">
                            <a class="nav-link text-light {{nav_item_class('profiles')}}" href="{{route('profiles')}}">
                                <span data-feather="profiles"></span>
                                Profile
                            </a>
                        </li>
                        @if(auth()->user()->type == 'admin')
                        <li class="nav-item">
                            <a class="nav-link  text-light {{nav_item_class('approvals')}}" href="{{route('approval.index')}}">
                                <span data-feather="file"></span>
                                Approvals
                            </a>
                        </li>
                        @endif
                        <li class="nav-item">
                            <a class="nav-link text-light {{nav_item_class('designs')}}" href="{{route('design.index')}}">
                                <span data-feather="shopping-cart"></span>
                                Products
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>


            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Dashboard</h1>
                </div>
                <div style="margin-bottom: 15%">
                    @yield('content')
                </div>
            </main>
        </div>
    </div>

    <footer class="footer text-center fixed-bottom text-light" style="background-color: black;">
        <div class="container mt-3">
            <p>
                copyright©smangcoteam <br>
                <span>
                smangcoteam228@gmail.com
                </span>
            </p>
        </div>
    </footer>

    <script src="jquery-3.5.1.slim.min.js"></script>

    <script src="/template_admin/dashboard.js"></script>
</body>

</html>
