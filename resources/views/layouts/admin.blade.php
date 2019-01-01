<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <link rel="stylesheet" href={{asset("/css/bootstrap.css")}}>
    <link rel="stylesheet" href={{asset("css/style.css")}}>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
    <title>Bootstrap Sidebar 1</title>

    <script defer src={{secure_url("https://use.fontawesome.com/releases/v5.0.13/js/solid.js")}} integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src={{secure_url("https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js")}} integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>
<body>
<div class="wrapper">
    <!-- Sidebar  -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3>Dashboard</h3>
        </div>

        <ul class="list-unstyled components">
            <p style="margin-left: auto;">Dummy Content</p>
            <li >
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Home</a>
                <ul class="collapse list-unstyled" id="homeSubmenu">
                    <li>
                        <a href="#">Home 1</a>
                    </li>
                    <li>
                        <a href="#">Home 2</a>
                    </li>
                    <li>
                        <a href="#">Home 3</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">About</a>
            </li>
            <li>
                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pages</a>
                <ul class="collapse list-unstyled" id="pageSubmenu">
                    <li>
                        <a href="#">Page 1</a>
                    </li>
                    <li>
                        <a href="#">Page 2</a>
                    </li>
                    <li>
                        <a href="#">Page 3</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">Portfolio</a>
            </li>
            <li>
                <a href="#">Contact</a>
            </li>
        </ul>


    </nav>

    <!-- Page Content  -->
    <div id="content" >

        <nav class="navbar navbar-expand-lg navbar-light bg-light ">


            <div class="container-fluid">

                <button type="button" id="sidebarCollapse" class="btn btn-info">
                    <i class="fas fa-align-left"></i>
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



                        <a id="homeNav" class="nav-item nav-link ml-auto" href="#">Home</a>
                        <a id="homeNav" class="nav-item nav-link ml-auto" href="#">Mission</a>
                        <a id="homeNav" class="nav-item nav-link ml-auto" href="#">Services</a>
                        <a id="homeNav" class="nav-item nav-link ml-auto" href="#">Staff</a>
                        <a id="homeNav" class="nav-item nav-link ml-auto" href="#">Testimonials</a>



                        <!-- /.dropdown-user -->


                        <form action="" class="form-inline ml-auto">
                            <div class="input-group">
                                <label class="sr-only" for="search">Search</label>
                                <input type="text" class="form-control"  id="search" placeholder="Search for...">
                                <div class="input-group-append">
                                    <button class="btn btn-info" type="button"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </form><!-- Form ending -->
                        <div class="btn-group dropleft ml-auto">
                            <button  style="height: 37px; background-color:#6d7fcc; color:#fff;" type="button" class="btn  btn-sm ml-3 dropdown-toggle " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                User
                            </button>
                            <div class="dropdown-menu">

                                <a style="color:#6d7fcc;" class="dropdown-item" href="#"><i class="fa fa-user"></i>&nbsp;User Profile</a>
                                <a style="color:#6d7fcc;" class="dropdown-item" href="#"><i class="fas fa-cogs"></i>&nbsp;Settings</a>
                                <div class="dropdown-divider"></div>
                                <a style="color:#6d7fcc;" class="dropdown-item" href="#"><i class="fas fa-sign-out-alt"></i>&nbsp;Logout</a>
                            </div>
                        </div>


                    </div><!-- Main Navbar -->
                </div>


            </div>

        </nav>


        <h2>Collapsible Sidebar Using Bootstrap 4</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

        <div class="line"></div>

        <h2>Lorem Ipsum Dolor</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

        <div class="line"></div>

        <h2>Lorem Ipsum Dolor</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

        <div class="line"></div>

        <h3>Lorem Ipsum Dolor</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
</div>
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