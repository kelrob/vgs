<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VGS Recruitment</title>
    <link rel="stylesheet" href="{{ url('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    <link href="{{ url('css/hover-min.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Mukta+Vaani:wght@200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light smart-scroll shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img class="logo" src="{{ url('img/logo.png') }}">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-5 mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/#services') }}">Our Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/about') }}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/employers') }}">Employers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Find Jobs</a>
                    </li>
                </ul>

                <ul class="navbar-nav right-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="post-job.html">Post a Job</a>
                    </li>
                    @auth

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                My Account
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ url('my-profile') }}">My Profile</a>
                                <a class="dropdown-item" href="my-cv">My CV</a>


                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                                                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>


                            </div>
                        </li>

                    @endauth

                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/signup') }}">Register</a>
                        </li>
                    @endguest

                </ul>
            </div>
        </div>
    </nav>


    @yield('main-content')


    <!-- Footer -->

    <footer>
        <div class="container">
            <div class="ft-wrap">
                <div class="col-lg-2 col mb-3">
                    <h2>Company</h2>
                    <ul class="ft-menu">
                        <li><a href="#">Find a Job</a></li>
                        <li><a href="#">Post a Job</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Help & Support</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col mb-3">
                    <h2>Information</h2>
                    <ul class="ft-menu">
                        <li><a href="#">Privacy policy</a></li>
                        <li><a href="#">Term & Condition</a></li>
                        <li><a href="#">Careers</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col mb-3">
                    <h2>Contact Us</h2>
                    <ul class="ft-menu">
                        <li>63 Ogunlana Drive, Surulere, Lagos.</li>
                        <li>info@vgsrecruitment.com</li>
                        <li>+234 (0) 805 636 3501</li>
                    </ul>
                </div>
                <div class="col-lg-4 col-12 mb-3">
                    <h2>Subscription</h2>
                    <ul class="ft-menu">
                        <li>Subscribe to our Newsletters</li>
                    </ul>
                    <form class="form-inline" method="POST" action="{{ url('/subscribe') }}">
                        @if (session()->has('sub-msg'))
                            <div class="">
                                <script>
                                    alert('Subscribed Successfully')

                                </script>
                            </div>
                        @endif
                        @csrf
                        <div class="form-group mr-2 mb-2">
                            <input type="email" name="email" class="form-control" id="email"
                                placeholder="Email address">
                        </div><button type="submit" class="btn btn-primary mb-2">Subscibe</button></a>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="copyright">
                        <p>© VGS Recruitment 2021. All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src={{ url('js/jquery.min.js') }}></script>
    <script src={{ url('js/popper.min.js') }}></script>
    <script src={{ url('js/bootstrap.min.js') }}></script>
    <script>
        $('body').css('padding-top', $('.navbar').outerHeight() + 'px')

        // detect scroll top or down
        if ($('.smart-scroll').length > 0) { // check if element exists
            var last_scroll_top = 0;
            $(window).on('scroll', function() {
                scroll_top = $(this).scrollTop();
                if (scroll_top < last_scroll_top) {
                    $('.smart-scroll').removeClass('scrolled-down').addClass('scrolled-up');
                } else {
                    $('.smart-scroll').removeClass('scrolled-up').addClass('scrolled-down');
                }
                last_scroll_top = scroll_top;
            });
        }

    </script>
</body>

</html>
