<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <link rel="stylesheet" href={{asset("/css/bootstrap.css")}}>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
    <title>Laravel CMS</title>

    <link rel="stylesheet" href={{asset("css/style.css")}}>
    <script defer src={{secure_url("https://use.fontawesome.com/releases/v5.0.13/js/solid.js")}} integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src={{secure_url("https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js")}} integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

    @yield('styles')
</head>
<body>
<div class="wrapper">
    <!-- Sidebar  -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3>Home</h3>
        </div>

        <ul class="list-unstyled components">
            <li>
                <a href="#">Dashboard</a>
            </li>
            <li >
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="fas fa-wrench"></i>&nbsp;Users</a>
                <ul class="collapse list-unstyled" id="homeSubmenu">
                    <li>
                        <a href="{{route('users.index')}}">All Users</a>
                    </li>
                    <li>
                        <a href="{{route('users.create')}}">Create User</a>
                    </li>

                </ul>
            </li>
            <li>
                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="fas fa-wrench"></i> &nbsp;Posts</a>
                <ul class="collapse list-unstyled" id="pageSubmenu">
                    <li>
                        <a href="{{route('posts.index')}}">All Posts</a>
                    </li>
                    <li>
                        <a href="{{route('posts.create')}}">Create Post</a>
                    </li>
                    <li>
                        <a href={{route('comments.index')}}>Comments</a>
                    </li>

                </ul>
            </li>
            <li >
                <a href="#categorySubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="fas fa-wrench"></i> Categories</a>
                <ul class="collapse list-unstyled" id="categorySubmenu">
                    <li>
                        <a href="{{route('categories.index')}}">All Categories</a>
                    </li>


                </ul>
            </li>

            <li>
                <a href="#mediaSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="fas fa-wrench"></i> Media</a>
                <ul class="collapse list-unstyled" id="mediaSubmenu">
                    <li>
                        <a href="{{route('media.index')}}">All Media</a>
                    </li>
                    <li>
                        <a href="{{route('media.create')}}">Upload Media</a>
                    </li>


                </ul>
            </li>

        </ul>


    </nav>

    <!-- Page Content  -->
    <div id="content" >

        <nav class="navbar navbar-expand-lg navbar-light bg-light ">


            <div class="container-fluid">

                <button style="background-color:#8B2F2F; border-color:#8B2F2F;" type="button" id="sidebarCollapse" class="btn btn-info ">
                    <i  class="fas fa-align-left"></i>
                    <span></span>
                </button> <!-- Toggle Sidebar Button-->





                <button class=" navbar-toggler " type="button" data-toggle="collapse"
                        data-target="#myTogglerNav" aria-controls="myTogglerNav" aria-expanded="false"
                        aria-label="Toggle Navigation" id="toggleMainNav"
                        >
                    <i class="fas fa-align-right"></i>
                </button><!-- Toggle Main Nav Button-->


                <div class="collapse navbar-collapse " id="myTogglerNav">
                    <div class="navbar-nav ml-auto  ">



                        <a style="color:#8B2F2F;" id="homeNav" class="nav-item nav-link ml-auto" href="{{route('welcome')}}">Home</a>
                        <a style="color:#8B2F2F;" id="homeNav" class="nav-item nav-link ml-auto" href="#">Example 1</a>
                        <a style="color:#8B2F2F;" id="homeNav" class="nav-item nav-link ml-auto" href="#">Example 2</a>
                        <a style="color:#8B2F2F;" id="homeNav" class="nav-item nav-link ml-auto" href="#">Example 3</a>
                        <a style="color:#8B2F2F;" id="homeNav" class="nav-item nav-link ml-auto" href="#">Example 4</a>



                        <!-- /.dropdown-user -->


                        <form action="" class="form-inline ml-auto">
                            <div class="input-group">
                                <label class="sr-only" for="search">Search</label>
                                <input style="border-color: #8B2F2F;" type="text" class="form-control"  id="search" placeholder="Search for...">
                                <div class="input-group-append">
                                    <button style="background-color:#8B2F2F; border-color:#8B2F2F; " class="btn btn-info" type="button"><i  class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </form><!-- Form ending -->
                        <div class="btn-group dropleft ml-auto">
                            <button  id="userButton" type="button" class="btn  btn-sm ml-3 dropdown-toggle " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                {{Auth::user()->name}}
                            </button>
                            <div class="dropdown-menu">

                                <a style="color:#8B2F2F;" class="dropdown-item" href="#"><i class="fa fa-user"></i>&nbsp;User Profile</a>
                                <a style="color:#8B2F2F;" class="dropdown-item" href="#"><i class="fas fa-cogs"></i>&nbsp;Settings</a>
                                <div class="dropdown-divider"></div>
                                <a style="color:#8B2F2F;" class="dropdown-item"
                                   href="{{route('logout')}}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="fas fa-sign-out-alt"></i>&nbsp;Logout</a>
                                <form hidden id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </div>


                    </div><!-- Main Navbar -->
                </div>


            </div>

        </nav>

        @yield('content')


    </div>
</div>
@yield('scripts')
<script src={{asset("js/jquery-3.3.1.js")}}></script>
<script src={{asset("js/popper.min.js")}}></script>
<script src={{asset("/js/bootstrap.js")}}></script>

<script src={{secure_url("https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js")}}></script>

<script>
    $(document).ready(function(){

        $('#sidebar').mCustomScrollbar({
        theme:'minimal',
        });

        $('#sidebarCollapse').on('click', function () {
            // open or close navbar
            $('#sidebar,#content').toggleClass('active');
            // close dropdowns
            $('.collapse.in').toggleClass('in');
            $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            // and also adjust aria-expanded attributes we use for the open/closed arrows
            // in our CSS



            if($('#toggleMainNav').attr("hidden")==null) {
                $('#toggleMainNav').attr("hidden",true);
            }else{
                $('#toggleMainNav').attr("hidden",false);
            }



        });

    });


</script>


</body>
</html>