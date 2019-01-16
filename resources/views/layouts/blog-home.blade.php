<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog Home</title>

    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">

    <link rel="stylesheet" href={{asset("css/app.css")}}>
    <link rel="stylesheet" href={{asset("css/libs.css")}}>

    <script defer src={{secure_url("https://use.fontawesome.com/releases/v5.0.13/js/solid.js")}} integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src={{secure_url("https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js")}} integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    @yield('custom-styles')
</head>

<body>
<nav id="navBarId" style="background-image: none; background-color:#662d1c;"  class="navbar fixed-top   navbar-expand-sm ">
    <div class="container">

        <a style="color:white;" href="#" class="navbar-brand">Daily Blog</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#myTogglerNav" aria-controls="myTogglerNav" aria-expanded="false"
                aria-label="Toggle Navigation">
            <i style="border-color:#fff; color:#fff;" class="fas fa-align-right"></i>
        </button>

        <div  class="collapse navbar-collapse " id="myTogglerNav">
            <div class="navbar-nav ml-auto" style="float:right; font-size: large;">
                <a  style="color:white;" class="nav-item nav-link ml-auto" href="{{ url('/') }}">Home</a>
                <a  style="color:white;" class="nav-item nav-link ml-auto" href="{{route('home.posts')}}">Blog</a>

                @if (Route::has('login'))


                    @auth

                @else
                    <a  style="color:white;" class="nav-item nav-link" href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                        <a id="userDrop" style="color:white;" class="nav-item nav-link" href="{{ route('register') }}">Register</a>
                    @endif
                    @endauth

                @endif

                @if(Auth::user())
                    <div class="btn-group dropleft ml-auto">
                        <button id="userButton2"  type="button" class="btn  btn-sm ml-3 dropdown-toggle " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                            {{Auth::user()->name}}
                        </button>
                        <div style="background-color: #fff;" class="dropdown-menu">

                            <a  style="color:#662d1c;" class="dropdown-item" href="#"><i class="fa fa-user"></i>&nbsp;User Profile</a>
                            <a  style="color:#662d1c;" class="dropdown-item" href="#"><i class="fas fa-cogs"></i>&nbsp;Settings</a>
                            <div class="dropdown-divider"></div>
                            <a style="color:#662d1c;" class="dropdown-item"
                               href="{{route('logout')}}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <i class="fas fa-sign-out-alt"></i>&nbsp;Logout</a>
                            <form hidden id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </div>
                @endif


            </div><!-- navbar -->
        </div>

    </div><!-- container -->
</nav><!-- nav -->

<!-- Content-->
<div class="container">

    <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

            <h1 style="color:#662d1c;"  class="page-header">
                Daily Blog
            </h1>

            @yield('content')

        </div>

        <!-- Blog Sidebar Widgets Column -->
        <div class="col-md-4">


            <!-- Blog Search Well -->
        @yield('search')


        <!-- Blog Categories Well -->
        @yield('categories')


        <!-- Side Widget Well -->
            @yield('sidebar')


        </div>

    </div>
    <!-- /.row -->

    <hr>

    <!-- Footer -->
    <footer>
        <div class="row">
            <div class="col-lg-12">
                <p style="color:black;">Copyright &copy; by DailyBlog</p>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </footer>

</div>
<!-- /.container -->



@yield('scripts')
<script src="{{asset('js/libs.js')}}"></script>
<script src={{asset("js/jquery-3.3.1.js")}}></script>
<script src={{asset("js/popper.min.js")}}></script>
<script src={{asset("/js/bootstrap.js")}}></script>
</body>
</html>