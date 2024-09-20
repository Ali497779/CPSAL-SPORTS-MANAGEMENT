<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CPSAL</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>


    <link href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet" type="text/css">
    <link href="{{asset('favicon.png')}}" rel="shortcut icon" type="image/vnd.microsoft.icon">
    <link href="{{asset('assets/css/akslider.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/donate.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/theme.css')}}" rel="stylesheet" type="text/css" />
    <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/mootools/1.3.1/mootools-yui-compressed.js'>
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>

    {{--
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <style>
        .loginBTN {
            /* background: #0d6efd; */
            background: transparent !important;
            color: #FFF;
            border-color: transparent !important;
            border-radius: 0px !important;
            /* font-weight: 600; */
            /* margin-top: 18px; */
            font-family: 'Oswald';
            padding: 24px 15px;
            outline: none !important;
            text-decoration: none;
            font-size: 15px;


        }

        .signinBTN {
            color: #FFF;
            background: transparent !important;
            border-color: transparent !important;
            border-radius: 0px !important;
            font-size: 15px;
            /* font-weight: 600; */
            font-family: 'Oswald';
            /* margin-top: 18px; */
            outline: none !important;
            padding: 24px 15px;
            text-decoration: none;

        }

        .loginBTN:hover {
            background: transparent !important;
            color: #ffc722 !important;
            border: none !important;
            /* font-weight: 700; */
            outline: none !important;
            text-decoration: none;

        }

        .signinBTN:hover {
            background: transparent !important;
            color: #ffc722 !important;
            border: none !important;
            /* font-weight: 700; */
            outline: none !important;
            text-decoration: none;

        }

        @media screen and (max-width: 825px) {
            .loginBTN {
                width: 100%;
            }

            .signinBTN {
                width: 100%;
            }
        }
    </style>

</head>

<body class="tm-isblog">


    <header>
        <div class="preloader">
            <div class="loader"></div>
        </div>
        <div class="over-wrap">
            <div class="toolbar-wrap">
                <div class="uk-container uk-container-center">
                    <div class="tm-toolbar uk-clearfix uk-hidden-small">


                        <div class="uk-float-right">
                            <div class="uk-panel">
                                <div class="social-top">
                                    <a href="https://www.facebook.com/"><span class="uk-icon-small uk-icon-hover uk-icon-facebook"></span></a>
                                    <a href="https://twitter.com/"><span class="uk-icon-small uk-icon-hover uk-icon-twitter"></span></a>
                                    <a href="https://google.com/"><span class="uk-icon-small uk-icon-hover uk-icon-google"></span></a>
                                    <a href="https://www.pinterest.com/"><span class="uk-icon-small uk-icon-hover uk-icon-pinterest"></span></a>
                                    <a href="https://www.youtube.com/"><span class="uk-icon-small uk-icon-hover uk-icon-youtube"></span></a>
                                    <a href="https://www.instagram.com/"><span class="uk-icon-small uk-icon-hover uk-icon-instagram"></span></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="tm-menu-box">

                <div style="height: 70px;" class="uk-sticky-placeholder">
                    <nav style="margin: 0px;" class="tm-navbar uk-navbar" data-uk-sticky="">
                        <div class="uk-container uk-container-center">
                            <a class="tm-logo uk-float-left" href="/">
                                <img src="{{asset('dashboard/img/cpsal.png')}}" alt="logo" title="logo"
                                    style="width:70px;"> <span style="margin-top: 10px;">CPS<em>AL</em></span>
                            </a>

                            <ul class="uk-navbar-nav uk-hidden-small">
                                <li class="uk-parent" data-uk-dropdown="{'preventflip':'y'}" aria-haspopup="true"
                                    aria-expanded="false"><a href="/">Home</a>

                                </li>
                                <li data-uk-dropdown="{'preventflip':'y'}" aria-haspopup="true" aria-expanded="false"><a
                                        href="{{route('about')}}">About</a></li>
                                <li><a href="{{route('players')}}">Players</a>
                                </li>
                                <li><a href="{{route('gallary')}}">Gallery</a></li>

                                <li class="uk-parent uk-active" data-uk-dropdown="{'preventflip':'y'}"
                                    aria-haspopup="true" aria-expanded="false"><a href="{{route('league')}}">league</a>
                                    <div class="uk-dropdown uk-dropdown-navbar uk-dropdown-width-1">
                                        <div class="uk-grid uk-dropdown-grid">
                                            <div class="uk-width-1-1">
                                                <ul class="uk-nav uk-nav-navbar">
                                                    <li><a href="{{route('teamPoints')}}">team points</a></li>

                                </li>
                            </ul>
                        </div>
                </div>
            </div>
            </li>


            <li class="uk-parent" data-uk-dropdown="{'preventflip':'y'}" aria-haspopup="true" aria-expanded="false"><a
                    href="{{route('matches')}}">Match</a>

            </li>
            {{-- <li><a href="news.html">News</a>
            </li> --}}
            {{-- <li><a href="category.html">Shop</a>
            </li> --}}
            <li><a href="{{route('contact')}}">Contact</a>
            </li>
            <li>
                <div class="d-flex justify-content-center">
                    <a href="{{ route('auth.login') }}" class="mr-3 loginBTN ">LOGIN</a>
                </div>
            </li>
            <li>
                <div class="d-flex justify-content-center">
                    <a href="{{ route('auth.register') }}" class=" signinBTN">SIGN UP</a>

                </div>

            </li>

            </ul>
            <a href="#offcanvas" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas=""></a>

        </div>
        </nav>
        </div>

        </div>
        </div>

    </header>
    <div id="offcanvas" class="uk-offcanvas">
        <div class="uk-offcanvas-bar">
            <ul class="uk-nav uk-nav-offcanvas">
                <a href="/">
                    <img src="{{asset('dashboard/img/cpsal.png')}}" alt="logo" title="logo"
                        style="width:55px;margin-left: 10px;margin-top: 10px;margin-bottom: 10px;"> <span
                        style="margin-top: 10px;">CPS<em>AL</em></span>
                </a>
                <li class="uk-parent" data-uk-dropdown="{'preventflip':'y'}" aria-haspopup="true" aria-expanded="false">
                    <a href="/">Home</a>

                </li>
                <li data-uk-dropdown="{'preventflip':'y'}" aria-haspopup="true" aria-expanded="false"><a href="{{route('about')}}">About</a></li>
                <li><a href="{{route('players')}}">Players</a></li>
                <li><a href="{{route('gallary')}}">Gallery</a></li>
                <li><a href="{{route('league')}}">Leagues</a></li>
                <li><a href="{{route('teamPoints')}}">team points</a></li>


                <li class="uk-parent" data-uk-dropdown="{'preventflip':'y'}" aria-haspopup="true" aria-expanded="false">
                    <a href="{{route('matches')}}">Match</a>

                </li>
                {{-- <li><a href="news.html">News</a>
                </li> --}}
                {{-- <li><a href="category.html">Shop</a>
                </li> --}}
                <li><a href="{{route('contact')}}">Contact</a>
                </li>
                <li>
                    <div class="uk-parent">
                        <a href="{{ route('auth.login') }}" class="mr-3 loginBTN ">LOGIN</a>
                    </div>
                </li>
                <li>
                    <div class="uk-parent">
                        <a href="{{ route('auth.register') }}" class=" signinBTN">SIGN UP</a>

                    </div>

                </li>
            </ul>
        </div>
    </div>
    </div>

    <script type="text/javascript" src="{{asset('assets/js/jquery.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/uikit.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/SimpleCounter.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/components/grid.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/components/slider.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/components/slideshow.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/components/slideset.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/components/sticky.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/components/lightbox.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script>

    <script type="text/javascript" src="{{asset('assets/js/theme.js')}}"></script>
    <script>
        // Get the current page URL
        var currentPageUrl = window.location.href;

        // Get all the navigation list items
        var navItems = document.querySelectorAll('header nav ul li');

        // Loop through the list items and check if the child link's href matches the current page URL
        navItems.forEach(function(item) {
        var link = item.querySelector('a');
        if (link.href === currentPageUrl) {
            item.classList.add('uk-active');
        }
        });
    </script>
    <script>
        // Get the current page URL
        var currentPageUrl = window.location.href;
        
        // Get all the navigation links
        var navLinks = document.querySelectorAll('#offcanvas .uk-nav li');
        
        // Loop through the links and check if the href matches the current page URL
        navLinks.forEach(function(li) {
        var link = li.querySelector('a');
        if (link && link.href === currentPageUrl) {
            li.classList.add('uk-active');
        }
        });
    </script>
</body>

</html>