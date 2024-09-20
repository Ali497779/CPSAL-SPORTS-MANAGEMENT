<!DOCTYPE html>
<html lang="en">
<head>
{{--  <meta name="title" content="Digital Marketing Services | Search Marketing Services">
<meta name="description" content="I am a digital marketer">
<meta name="keywords" content="marketing">
<meta name="robots" content="index, follow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="language" content="English"> --}}
{{-- <title>CPSAL {{ isset($title) ? '| ' . $title : '' }}</title> --}}
    {{-- <meta name="title" content="CPSAL"> --}}
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>{{$title }}</title>
    <meta name="description" content="{{$seoDec }}">
    <meta name="keywords" content="{{$seoKey }}">
    <meta name="author" content="{{$seoAuth }}">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <link rel="stylesheet" href="https://cdn.usebootstrap.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    
  
    <link href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet" type="text/css">
      <link href="{{asset('favicon.png')}}" rel="shortcut icon" type="image/vnd.microsoft.icon">
      <link href="{{asset('assets/css/akslider.css')}}" rel="stylesheet" type="text/css" />
      <link href="{{asset('assets/css/donate.css')}}" rel="stylesheet" type="text/css" />
      <link href="{{asset('assets/css/theme.css')}}" rel="stylesheet" type="text/css" />

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
        <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/mootools/1.3.1/mootools-yui-compressed.js'></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>


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
                background: transparent  !important;
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

<body >
    
    <?php 
    $footerpara = App\Models\Page::where('name','Footer')->where('type','Paragraph')->first();
    $footernews = App\Models\Page::where('name','Footer')->where('type','newsletters')->first();
    $fb = App\Models\Page::where('name','Footer')->where('type','fb')->first();
    $twitter = App\Models\Page::where('name','Footer')->where('type','twitter')->first();
    $gmail = App\Models\Page::where('name','Footer')->where('type','gmail')->first();
    $pinterest = App\Models\Page::where('name','Footer')->where('type','pinterest')->first();
    $youtube = App\Models\Page::where('name','Footer')->where('type','yt')->first();
    $insta = App\Models\Page::where('name','Footer')->where('type','insta')->first();


    ?>
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


                                    <a href="{{ ($fb->value) ? $fb->value : 'https://www.facebook.com' }}"><span class="uk-icon-small uk-icon-hover uk-icon-facebook"></span></a>       
                                    <a href="{{ ($twitter->value) ? $twitter->value : 'https://www.twitter.com' }}"><span class="uk-icon-small uk-icon-hover uk-icon-twitter"></span></a>
                                    <a href="{{ ($gmail->value) ? $gmail->value : 'https://www.gmail.com' }}"><span class="uk-icon-small uk-icon-hover uk-icon-google"></span></a>
                                    <a href="{{ ($pinterest->value) ? $pinterest->value : 'https://www.pinterest.com' }}"><span class="uk-icon-small uk-icon-hover uk-icon-pinterest"></span></a>
                                    <a href="{{ ($youtube->value) ? $youtube->value : 'https://www.youtube.com' }}"><span class="uk-icon-small uk-icon-hover uk-icon-youtube"></span></a>
                                    <a href="{{ ($insta->value) ? $insta->value : 'https://www.instagram.com' }}"><span class="uk-icon-small uk-icon-hover uk-icon-instagram"></span></a>
                                </div>
                            </div>
                        </div>
    
                    </div>
                </div>
            </div>
    
            <div class="tm-menu-box">
    
                <div style="height: 70px;" class="uk-sticky-placeholder">
                    <nav style="margin: 0px; " class="tm-navbar uk-navbar" data-uk-sticky="">
                        <div class="uk-container uk-container-center">
                            <a class="tm-logo uk-float-left" href="/">
                                <img src="{{asset('dashboard/img/cpsal.png')}}" alt="logo" title="logo" style="width:70px;"> <span style="margin-top: 10px;">CPS<em>AL</em></span>
                            </a>
    
                            <ul class="uk-navbar-nav uk-hidden-small">
                                <li class="uk-parent" data-uk-dropdown="{'preventflip':'y'}" aria-haspopup="true" aria-expanded="false"><a href="/">Home</a>
                               
                                </li>
                                <li data-uk-dropdown="{'preventflip':'y'}" aria-haspopup="true" aria-expanded="false"><a href="{{route('about')}}">About</a></li>
                                {{-- <li><a href="{{route('players')}}">Players</a> --}}
                                </li>
                                <li class="uk-parent " data-uk-dropdown="{'preventflip':'y'}" aria-haspopup="true" aria-expanded="false"><a href="{{route('players')}}">Players</a>
                                    <div class="uk-dropdown uk-dropdown-navbar uk-dropdown-width-1">
                                        <div class="uk-grid uk-dropdown-grid">
                                            <div class="uk-width-1-1">
                                                <ul class="uk-nav uk-nav-navbar">
                                                    <li><a href="{{route('playerStat')}}" >All Players Points</a></li>

                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="{{route('gallary')}}">Gallery</a></li>
                                
                                <li class="uk-parent " data-uk-dropdown="{'preventflip':'y'}" aria-haspopup="true" aria-expanded="false"><a href="{{route('league')}}">league</a>
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


                                <li class="uk-parent" data-uk-dropdown="{'preventflip':'y'}" aria-haspopup="true" aria-expanded="false"><a href="{{route('matches')}}">Match</a>
         
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
            <a  href="/">
                            <img src="{{asset('dashboard/img/cpsal.png')}}" alt="logo" title="logo" style="width:55px;margin-left: 10px;margin-top: 10px;margin-bottom: 10px;"> <span style="margin-top: 10px;">CPS<em>AL</em></span>
                        </a>
                <li class="uk-parent" data-uk-dropdown="{'preventflip':'y'}" aria-haspopup="true" aria-expanded="false"><a href="/">Home</a>
                           
                            </li>
                            <li data-uk-dropdown="{'preventflip':'y'}" aria-haspopup="true" aria-expanded="false"><a href="{{route('about')}}">About</a></li>
                            {{-- <li><a href="{{route('players')}}">Players</a></li> --}}
                            <li class="uk-parent " data-uk-dropdown="{'preventflip':'y'}" aria-haspopup="true" aria-expanded="false"><a href="{{route('players')}}">Players</a>
                                <div class="uk-dropdown uk-dropdown-navbar uk-dropdown-width-1">
                                    <div class="uk-grid uk-dropdown-grid">
                                        <div class="uk-width-1-1">
                                            <ul class="uk-nav uk-nav-navbar">
                                                <li><a href="{{route('playerStat')}}" >All Players Points</a></li>

                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li><a href="{{route('gallary')}}">Gallery</a></li>
                            {{-- <li><a href="{{route('league')}}">Leagues</a></li> --}}
                            <li class="uk-parent " data-uk-dropdown="{'preventflip':'y'}" aria-haspopup="true" aria-expanded="false"><a href="{{route('league')}}">league</a>
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
                            <li><a href="{{route('teamPoints')}}">team points</a></li>


                            <li class="uk-parent" data-uk-dropdown="{'preventflip':'y'}" aria-haspopup="true" aria-expanded="false"><a href="{{route('matches')}}">Match</a>
     
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

    {{ $slot }}


    
    <footer>
        
        <div class="bottom-wrapper">
            <div class="tm-bottom-f-box  ">
                <div class="uk-container uk-container-center">
                    <section id="tm-bottom-f" class="tm-bottom-f uk-grid"
                        data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">

                        <div class="uk-width-1-1">
                            <div class="uk-panel">
                                <div class="footer-logo">
                                    <a href="/"><img src="{{ asset('dashboard/img/cpsal.png') }}"
                                            alt=""><span>CPS</span>AL</a>
                                </div>
                                <div class="footer-socials">
                                    <div class="social-top">
                                    <a href="{{ ($fb->value) ? $fb->value : 'https://www.facebook.com' }}"><span class="uk-icon-small uk-icon-hover uk-icon-facebook"></span></a>       
                                    <a href="{{ ($twitter->value) ? $twitter->value : 'https://www.twitter.com' }}"><span class="uk-icon-small uk-icon-hover uk-icon-twitter"></span></a>
                                    <a href="{{ ($gmail->value) ? $gmail->value : 'https://www.gmail.com' }}"><span class="uk-icon-small uk-icon-hover uk-icon-google"></span></a>
                                    <a href="{{ ($pinterest->value) ? $pinterest->value : 'https://www.pinterest.com' }}"><span class="uk-icon-small uk-icon-hover uk-icon-pinterest"></span></a>
                                    <a href="{{ ($youtube->value) ? $youtube->value : 'https://www.youtube.com' }}"><span class="uk-icon-small uk-icon-hover uk-icon-youtube"></span></a>
                                    <a href="{{ ($insta->value) ? $insta->value : 'https://www.instagram.com' }}"><span class="uk-icon-small uk-icon-hover uk-icon-instagram"></span></a>
                                    </div>
                                </div>
                                <div class="clear"></div>

                                <p class="footer-about-text">
                                   @if ($footerpara->value != "" && $footerpara->value!=null)
                                   {{$footerpara->value}}
                                   @else
                                   Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                                   @endif
                                  
                                </p>
                            </div>
                        </div>
                    </section>
                </div>
            </div>

            <div class="tm-bottom-g-box  ">
                <div class="uk-container uk-container-center">
                    <section id="tm-bottom-g" class="tm-bottom-f uk-grid"
                        data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">

                        <div class="uk-width-1-1 uk-width-large-1-2">
                            <div class="uk-panel">
                                <div class="match-list-wrap foot">
                                    <div id="carusel-7" class="uk-slidenav-position"
                                        data-uk-slideshow="{ height : 37, autoplay:true, animation:'scroll' }">
                                        <div class="last-match-top">
                                            <div class="last-match-title">Upcoming Matches</div>
                                            <div class="footer-slider-btn">
                                                <a href="/"
                                                    class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous"
                                                    data-uk-slideshow-item="previous"></a>
                                                <a href="/"
                                                    class="uk-slidenav uk-slidenav-contrast uk-slidenav-next"
                                                    data-uk-slideshow-item="next"></a>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                        <ul class="uk-slideshow">
                                            @forelse (App\Models\Battle::latest()->get() as $battle)
                                                <li class="" aria-hidden="true">
                                                    <div class="match-list-item alt foot">
                                                        <div class="wrapper">
                                                            <div class="logo">
                                                                <a href="{{route('matches')}}F">
                                                                    <img src="{{ asset('assets/team/'.$battle->byTeam->image) }}"
                                                                        class="img-polaroid" alt="by Team"
                                                                        title="by Team">
                                                                </a>
                                                            </div>
                                                            <div class="team-name">
                                                                {{ $battle->byTeam->name }}</div>
                                                            <div class="versus">
                                                                @if ($battle->forTeam != null)
                                                                 q   
                                                                @endif
                                                               
                                                            {{-- <a class="read-more" href="match-single.html">Read More</a> --}}
                                                        </div>
                                                    </div>

                                                @empty
                                                    <div class="text-center">
                                                        <p class="text-danger">
                                                            No match added yet!
                                                        </p>
                                                    </div>

                                                </li>
                                            @endforelse

                                            {{-- <li class="" aria-hidden="true">
                                            <div class="match-list-item alt foot">
                                                <div class="wrapper">
                                                    <div class="logo">
                                                        <a href="match-single.html">
                                                            <img src="images/team-ava2.png" class="img-polaroid" alt="Cambridgehire VS china (2015-11-29)" title="Cambridgehire VS china (2015-11-29)">
                                                        </a>
                                                    </div>
                                                    <div class="team-name">
                                                        Cambridgehire </div>
                                                    <div class="versus">VS</div>

                                                    <div class="team-name">
                                                        china </div>
                                                    <div class="logo">
                                                        <a href="match-single.html">
                                                            <img src="images/team-ava3.png" class="img-polaroid" alt="Cambridgehire VS china (2015-11-29)" title="Cambridgehire VS china (2015-11-29)">
                                                        </a>
                                                    </div>
                                                    <a class="read-more" href="match-single.html">Read More</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="" aria-hidden="true">
                                            <div class="match-list-item alt foot">
                                                <div class="wrapper">
                                                    <div class="logo">
                                                        <a href="match-single.html">
                                                            <img src="images/team-ava4.png" class="img-polaroid" alt="Cambridgehire VS china (2015-11-20)" title="Cambridgehire VS china (2015-11-20)">
                                                        </a>
                                                    </div>
                                                    <div class="team-name">
                                                        Cambridgehire </div>
                                                    <div class="versus">VS</div>

                                                    <div class="team-name">
                                                        china </div>
                                                    <div class="logo">
                                                        <a href="match-single.html">
                                                            <img src="images/team-ava5.png" class="img-polaroid" alt="Cambridgehire VS china (2015-11-20)" title="Cambridgehire VS china (2015-11-20)">
                                                        </a>
                                                    </div>
                                                    <a class="read-more" href="match-single.html">Read More</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="" aria-hidden="true">
                                            <div class="match-list-item alt foot">
                                                <div class="wrapper">
                                                    <div class="logo">
                                                        <a href="match-single.html">
                                                            <img src="images/team-ava.png" class="img-polaroid" alt="England VS Amsterdam (2015-11-14)" title="England VS Amsterdam (2015-11-14)">
                                                        </a>
                                                    </div>
                                                    <div class="team-name">
                                                        England </div>
                                                    <div class="versus">VS</div>

                                                    <div class="team-name">
                                                        Amsterdam </div>
                                                    <div class="logo">
                                                        <a href="match-single.html">
                                                            <img src="images/team-ava1.png" class="img-polaroid" alt="England VS Amsterdam (2015-11-14)" title="England VS Amsterdam (2015-11-14)">
                                                        </a>
                                                    </div>
                                                    <a class="read-more" href="match-single.html">Read More</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li aria-hidden="false">
                                            <div class="match-list-item alt foot">
                                                <div class="wrapper">
                                                    <div class="logo">
                                                        <a href="match-single.html">
                                                            <img src="images/team-ava2.png" class="img-polaroid" alt="Cambridgehire VS china (2015-11-29)" title="Cambridgehire VS china (2015-11-29)">
                                                        </a>
                                                    </div>
                                                    <div class="team-name">
                                                        Cambridgehire </div>
                                                    <div class="versus">VS</div>

                                                    <div class="team-name">
                                                        china </div>
                                                    <div class="logo">
                                                        <a href="match-single.html">
                                                            <img src="images/team-ava3.png" class="img-polaroid" alt="Cambridgehire VS china (2015-11-29)" title="Cambridgehire VS china (2015-11-29)">
                                                        </a>
                                                    </div>
                                                    <a class="read-more" href="match-single.html">Read More</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="" aria-hidden="true">
                                            <div class="match-list-item alt foot">
                                                <div class="wrapper">
                                                    <div class="logo">
                                                        <a href="match-single.html">
                                                            <img src="images/team-ava4.png" class="img-polaroid" alt="King VS china (2015-11-20)" title="King VS china (2015-11-20)">
                                                        </a>
                                                    </div>
                                                    <div class="team-name">
                                                        King </div>
                                                    <div class="versus">VS</div>

                                                    <div class="team-name">
                                                        china </div>
                                                    <div class="logo">
                                                        <a href="match-single.html">
                                                            <img src="images/team-ava5.png" class="img-polaroid" alt="King VS china (2015-11-20)" title="King VS china (2015-11-20)">
                                                        </a>
                                                    </div>
                                                    <a class="read-more" href="match-single.html">Read More</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="" aria-hidden="true">
                                            <div class="match-list-item alt foot">
                                                <div class="wrapper">
                                                    <div class="logo">
                                                        <a href="match-single.html">
                                                            <img src="images/team-ava.png" class="img-polaroid" alt="England VS Amsterdam (2015-11-14)" title="England VS Amsterdam (2015-11-14)">
                                                        </a>
                                                    </div>
                                                    <div class="team-name">
                                                        England </div>
                                                    <div class="versus">VS</div>

                                                    <div class="team-name">
                                                        Amsterdam </div>
                                                    <div class="logo">
                                                        <a href="match-single.html">
                                                            <img src="images/team-ava1.png" class="img-polaroid" alt="England VS Amsterdam (2015-11-14)" title="England VS Amsterdam (2015-11-14)">
                                                        </a>
                                                    </div>
                                                    <a class="read-more" href="match-single.html">Read More</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="" aria-hidden="true">
                                            <div class="match-list-item alt foot">
                                                <div class="wrapper">
                                                    <div class="logo">
                                                        <a href="match-single.html">
                                                            <img src="images/team-ava2.png" class="img-polaroid" alt="Cambridgehire VS china (2015-11-29)" title="Cambridgehire VS china (2015-11-29)">
                                                        </a>
                                                    </div>
                                                    <div class="team-name">
                                                        Cambridgehire </div>
                                                    <div class="versus">VS</div>

                                                    <div class="team-name">
                                                        china </div>
                                                    <div class="logo">
                                                        <a href="match-single.html">
                                                            <img src="images/team-ava3.png" class="img-polaroid" alt="Cambridgehire VS china (2015-11-29)" title="Cambridgehire VS china (2015-11-29)">
                                                        </a>
                                                    </div>
                                                    <a class="read-more" href="match-single.html">Read More</a>
                                                </div>
                                            </div>
                                        </li> --}}
                                        </ul>
                                    </div>




                                </div>
                            </div>
                        </div>

                        <div class="uk-width-1-1 uk-width-large-1-2">
                            <div class="uk-panel">
                                <div class="acymailing_module" id="acymailing_module_formAcymailing54111">
                                    <div class="acymailing_fulldiv" id="acymailing_fulldiv_formAcymailing54111">
                                        <form id="formAcymailing54111" method="post" name="formAcymailing54111">
                                            <div class="acymailing_module_form">
                                                <div class="mail-title">Newsletters</div>
                                                <div class="acymailing_introtext">
                                                    @if ( $footernews != null &&  $footernews != "")
                                                        {{ $footernews->value}}
                                                    @else
                                                    Suspendisse sodales, magna at
                                                    dignissim cursus, velit ex porttitor eros.
                                                    @endif
                                                    </div>
                                                <div class="clear"></div>
                                                <div class="space"></div>
                                                <table class="acymailing_form">
                                                    <tbody>
                                                        <tr>
                                                            <td class="acyfield_email acy_requiredField">
                                                                <span class="mail-wrap">
                                                                    <input id="user_email_formAcymailing54111"
                                                                        onfocus="if(this.value == 'Enter your email') this.value = '';"
                                                                        onblur="if(this.value=='') this.value='Enter your email';"
                                                                        class="inputbox" name="user[email]"
                                                                        style="width:80%" value="Enter your email"
                                                                        title="Enter your email" type="text">
                                                                </span>
                                                            </td>
                                                        </tr>
                                                        <tr>

                                                            <td class="acysubbuttons">
                                                                <span class="submit-wrap">
                                                                    <span class="submit-wrapper">
                                                                        <input class="button subbutton btn btn-primary"
                                                                            value="Subscribe" name="Submit"
                                                                            onclick="try{ return submitacymailingform('optin','formAcymailing54111'); }catch(err){alert('The form could not be submitted '+err);return false;}"
                                                                            type="submit">
                                                                    </span>
                                                                </span>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>

            <footer id="tm-footer" class="tm-footer">


                <div class="uk-panel">
                    <div class="uk-container uk-container-center">
                        <div class="uk-grid">
                            <div class="uk-width-1-1">
                                <div class="footer-wrap">
                                    <div class="foot-menu-wrap">
                                        <ul class="nav menu" style="justify-content: center;">
                                            <li class="item-169"><a href="/">Home</a>
                                            </li>

                                            <li class="item-165"><a href="{{ route('about') }}">About</a>
                                            </li>
                                            <li class="item-166"><a href="{{ route('players') }}">Players</a>
                                            </li>
                                            <li class="item-167"><a href="{{ route('matches') }}">Matches</a>
                                            </li>
                                            <li class="item-168"><a href="{{ route('league') }}">League</a>
                                            </li>

                                        </ul>
                                    </div>
                                    {{-- <div class="copyrights">Copyright © {{Date('Y')}} <a href="/">Sportak Team</a>. All Rights Reserved.</div> --}}
                                    <div class="copyrights">Designed & Developed By <a
                                            href="https://searchmarketingservice.com/">Search Marketing Services.</a>
                                    </div>

                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

        </div>

    </footer>

  

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
