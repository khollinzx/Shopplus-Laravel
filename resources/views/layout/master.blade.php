<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>ShopPlus+ Laravel</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet"
        type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/slick/slick.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/slick/slick-theme.css') }}" />
    <link href="{{ asset('frontend/css/styles.css')}}" rel="stylesheet" />


</head>

<body id="page-top">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#page-top">ShopPlus+ Laravel</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ml-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ml-auto">
                    <li class="nav-item hidden-xs hidden-sm"><a class="nav-link js-scroll-trigger " href="profile.html"
                            id="navbarDropdown" role="button"> <i class="fas fa-user-alt"></i> Collins@gmail.com </a>
                    </li>
                </ul>
            </div>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ml-auto">
                    <li class="nav-item py-1 mx-1"><a class="nav-link btn btn-primary text-white" href="login.html">Login<a>
                    </li>

                    <li class="nav-item py-1 mx-1"><a class="nav-link btn btn-outline-primary" href="signup.html"> Sign
                            Up</a>
                    </li>
                </ul>
            </div>
            <span class="navbar-text ml-5"><a href="#"><i class="fa fa-shopping-cart"></i> <sup
                        class="badge badge-danger">1</sup> </a></span>
        </div>
    </nav>

    @yield('content');
    <!-- Footer-->
    <footer class="footer py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 text-lg-left">Copyright © ShopPlus+ 2020</div>
                <div class="col-lg-4 my-3 my-lg-0">
                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </footer>
    <!-- Portfolio Modals-->
    <!-- Bootstrap core JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>

    <!-- Contact form JS-->
    <script src="{{ asset('frontend/assets/mail/jqBootstrapValidation.js') }}"></script>
    <script src="{{ asset('frontend/assets/mail/contact_me.js') }}"></script>

    <script src="{{ asset('frontend/slick/slick.min.js') }}"></script>

    <!-- Core theme JS-->
    <script src="{{ asset('frontend/js/scripts.js') }}"></script>
    <script src="{{ asset('frontend/js/sliders.js') }}"></script>

</body>

</html>
