<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Post</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href={{asset("css/app.css")}}>
    <link rel="stylesheet" href={{asset("css/libs.css")}}>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <script defer src={{secure_url("https://use.fontawesome.com/releases/v5.0.13/js/solid.js")}} integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src={{secure_url("https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js")}} integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>




</head>

<body >

<!-- Navigation -->


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
                        <div class="dropdown-menu">

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

<!-- Page Content -->
<div class="container">

    <div class="row">

        <!-- Blog Post Content Column -->
        <div class="col-lg-8">

            @yield('content')

        </div>

        <!-- Blog Sidebar Widgets Column -->
        <div class="col-md-4">

            <!-- Blog Search Well -->
            <div style="border-color: #662D1C;" class="well">
                <h4 style="color:#662d1c;">Search Comments:</h4>
                <div class="input-group">
                    <input style="border-color: #662D1C;" type="text" class="form-control">
                    <span class="input-group-btn">
                            <button style="border-color: #662D1C;background-color: #662D1C;" class="btn btn-primary" type="button">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                </div>
                <!-- /.input-group -->
            </div>

            <!-- Blog Categories Well -->
            <div style="border-color: #662D1C;" class="well">
                @yield('sidebarCategory')
                <!-- /.row -->
            </div>

            <!-- Side Widget Well -->
            <div style="border-color: #662D1C;" class="well">
                <h4 style="color:#662d1c;">Recent Comments</h4>
                <p style="color:#662d1c;"> Place Holder Place Holder Place Holder Place Holder Place Holder Place Holder Place Holder Place Holder
                    Place Holder Place HolderPlace Holder Place HolderPlace Holder Place HolderPlace Holder Place HolderPlace Holder Place Holder
                    Place Holder Place HolderPlace Holder Place HolderPlace Holder Place HolderPlace Holder Place Holder</p>
            </div>

        </div>

    </div>
    <!-- /.row -->

    <hr>

    <!-- Footer -->
    <footer>
        <div class="row">
            <div class="col-lg-12">
                <p>Copyright &copy; by DailyBlog</p>
            </div>
        </div>
        <!-- /.row -->
    </footer>

</div>
<!-- /.container -->

<!-- jQuery -->
<script src="{{asset('js/libs.js')}}"></script>
<script src={{asset("js/jquery-3.3.1.js")}}></script>
<script src={{asset("js/popper.min.js")}}></script>
<script src={{asset("/js/bootstrap.js")}}></script>
@yield('scripts')

</body>

</html>