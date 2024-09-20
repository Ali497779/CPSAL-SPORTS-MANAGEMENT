<x-layouts.website title="{{ $seoTitle['value'] }}" seoDec="{{ $seoDec['value'] }}" seoAuth="{{ $seoAuth['value'] }}"
    seoKey="{{ $seoKey['value'] }}">


    <div class="over-wrap">

        <div class="tm-top-a-box tm-full-width tm-box-bg-1 ">
            <div class="uk-container uk-container-center">
                <section id="tm-top-a" class="tm-top-a uk-grid uk-grid-collapse"
                    data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">

                    <div class="uk-width-1-1 uk-row-first">
                        <div class="uk-panel">
                            <div class="uk-cover-background uk-position-relative head-wrap"
                                style="height: 290px; background-image: url('{{ asset('assets/images/head-bg.jpg') }}');">
                                <img class="uk-invisible" src="{{ asset('assets/images/head-bg.jpg') }}" alt=""
                                    height="290" width="1920">
                                <div class="uk-position-cover uk-flex uk-flex-center head-title">
                                    <h1>Team Points</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        <div class="uk-container uk-container-center alt">
            <ul class="uk-breadcrumb">
                <li><a href="/">Home</a>
                </li>
                <li class="uk-active"><span>Team Points</span>
                </li>
            </ul>
        </div>


        <div class="uk-container uk-container-center" style="text-align: center">
            <h1>All <span style="color:#ffc722">Teams</span> Points
            </h1>
        </div>

       
       
       
        
        <div class="slider">
            <div class="slide-track">
                <div class="slide">
                    @foreach ($sports as $sport)

                        @switch($sport->id)
                            @case(1)
                                <a href="{{ route('league.sport', $sport->id) }}" class="navigation-link">
                                    <h1><i class="fa-sharp fa-solid fa-basketball"></i>{{ $sport->name }}
                                    </h1>
                                </a>
                            @break
        
                            @case(2)
                                <a href="{{ route('league.sport', $sport->id) }}" class="navigation-link">
                                    <h1><i class="fa-regular fa-futbol"></i>{{ $sport->name }}
                                    </h1>
                                @break
        
                                @case(3)
                                    <a class="sportlink" href="{{ route('league.sport', $sport->id) }}">
                                        <h1><i class="fa-solid fa-flag"></i> {{ $sport->name }}
                                        </h1>
                                    </a>
                                @break
        
                                @case(4)
                                    <a href="{{ route('league.sport', $sport->id) }}" class="navigation-link">
                                        <h1><i style="font-size: 35px " class="fa-solid fa-racquet"></i> {{ $sport->name }}
                                        </h1>
                                    </a>
                                @break
        
                                @case(5)
                                    <a href="{{ route('league.sport', $sport->id) }}" class="navigation-link">
                                        <h1><i class="fa-solid fa-baseball-bat-ball"></i> {{ $sport->name }}
                                        </h1>
                                    @break
        
                                    @case(6)
                                        <a href="{{ route('league.sport', $sport->id) }}" class="navigation-link">
                                            <h1><i class="fa-solid fa-baseball"></i> {{ $sport->name }}
                                            </h1>
                                        </a>
                                    @break
        
                                    @case(7)
                                        <a href="{{ route('league.sport', $sport->id) }}" class="navigation-link">
                                            <h1><i class="fa-solid fa-person-running"></i> {{ $sport->name }}
                                            </h1>
                                        @break
        
                                        @case(8)
                                            <a href="{{ route('league.sport', $sport->id) }}" class="navigation-link">
                                                <h1><i class="fa-sharp fa-solid fa-flag-checkered"></i> {{ $sport->name }}
                                                </h1>
                                            @break
        
                                            @case(9)
                                                <a href="{{ route('league.sport', $sport->id) }}" class="navigation-link">
                                                    <h1><i class="fa-solid fa-hands-clapping"></i> {{ $sport->name }}
                                                    </h1>
                                                </a>
                                            @break
        
                                            @case(10)
                                                <a href="{{ route('league.sport', $sport->id) }}" class="navigation-link">
                                                    <h1><i class="fa-solid fa-volleyball"></i> {{ $sport->name }}
                                                    </h1>
                                                </a>
                                            @break
        
                                            @case(11)
                                                <a href="{{ route('league.sport', $sport->id) }}" class="navigation-link">
                                                    <h1><i class="fa-solid fa-gamepad"></i> {{ $sport->name }}
                                                    </h1>
                                                </a>
                                            @break
        
                                            @default
                                        @endswitch
        
        
                    </div>
                @endforeach
            </div>
        </div>
    </div>


        {{-- <style>


@keyframes scroll {
  0% {
    transform: translateX(0);
  }
  100% {
    transform: translateX(calc(-250px * 7));
  }
}

.slider {
  height: 100px;
  margin: auto;
  overflow: hidden;
  position: relative;
  width: auto;

  .slide-track {
    animation: scroll 40s linear infinite;
    display: flex;
    width: calc(250px * 14);
  }
  .slide {
    height: 150px;
    width: 250px;
  }
}

        </style> --}}
        
              <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
              
            <section class="trigger section gutter-horizontal bg-gray gutter-vertical--m gutter-horizontal">
            <div class="customer-logos slider">
              <div class="slide-in-right slide"><img src="https://camo.githubusercontent.com/e4923bf90c04345e43aada42486ebc4f9a3e56eb/687474703a2f2f7069676d656e742e6769746875622e696f2f66616b652d6c6f676f732f6c6f676f732f766563746f722f636f6c6f722f677265656e732d666f6f642d737570706c696572732e737667" alt="Kinderhotel Aschauerhof" height="150" width="150"></a></div>
              <div class="slide-in-right slide"><img src="https://camo.githubusercontent.com/1c89cd43ff20ebfdae6d7dfc615bed22897d4f2c/687474703a2f2f7069676d656e742e6769746875622e696f2f66616b652d6c6f676f732f6c6f676f732f766563746f722f636f6c6f722f6175746f2d73706565642e737667" height="150" width="150"></a></div>
              <div class="slide-in-right slide"><img src="https://camo.githubusercontent.com/e7141f1aa02b6721a702b44a3b14b7383e4539ed/687474703a2f2f7069676d656e742e6769746875622e696f2f66616b652d6c6f676f732f6c6f676f732f766563746f722f636f6c6f722f63726f6674732d6163636f756e74616e74732e737667" height="150" width="150"></a></div>
              <div class="slide-in-right slide"><img src="https://camo.githubusercontent.com/339edd4ba206d97f2bc7c03f7b7fd5a1b5c97111/687474703a2f2f7069676d656e742e6769746875622e696f2f66616b652d6c6f676f732f6c6f676f732f766563746f722f636f6c6f722f63686573686972652d636f756e74792d68796769656e652d73657276696365732e737667" height="150" width="150"></a></div>
              <div class="slide-in-right slide"><img src="https://camo.githubusercontent.com/b9d65aaf5e5d1769f8bb0e04247ff6cfa0efa2ab/687474703a2f2f7069676d656e742e6769746875622e696f2f66616b652d6c6f676f732f6c6f676f732f766563746f722f636f6c6f722f666173742d62616e616e612e737667" height="150" width="150" alt="Tannenmuehle"></a></div>
              <div class="slide-in-right slide"><img src="https://camo.githubusercontent.com/8d4fa451b4f47d2d10ff585a78f7fbd88f8f5530/687474703a2f2f7069676d656e742e6769746875622e696f2f66616b652d6c6f676f732f6c6f676f732f766563746f722f636f6c6f722f73706163652d637562652e737667" height="150" width="150" alt="Loeffele"></a></div>
              <div class="slide-in-right slide"><img src="https://camo.githubusercontent.com/1e0d6f19906c869766d638227e7e3936aa9295c7/687474703a2f2f7069676d656e742e6769746875622e696f2f66616b652d6c6f676f732f6c6f676f732f766563746f722f636f6c6f722f6265617574792d626f782e737667" alt="Krone" height="150" width="150"></a></div>
              <div class="slide-in-right slide"><img src="https://camo.githubusercontent.com/0072b8f37157c7e0238342d8105dcc2c9b1e2217/687474703a2f2f7069676d656e742e6769746875622e696f2f66616b652d6c6f676f732f6c6f676f732f766563746f722f636f6c6f722f626162792d7377696d2e737667" alt="Obereggen" height="150" width="150"></a></div>
              <div class="slide-in-right slide"><img src="https://camo.githubusercontent.com/6b4aa115c3423ecbad9da2dba885d2d43084acfa/687474703a2f2f7069676d656e742e6769746875622e696f2f66616b652d6c6f676f732f6c6f676f732f766563746f722f636f6c6f722f7468652d64616e63652d73747564696f2e737667" alt="Ortnerhof" height="150" width="150"></a></div>
              <div class="slide-in-right slide"><img src="https://camo.githubusercontent.com/b0e5c1e174dcb2911bc712f240f7163fe597628c/687474703a2f2f7069676d656e742e6769746875622e696f2f66616b652d6c6f676f732f6c6f676f732f766563746f722f636f6c6f722f6a616d65732d616e642d736f6e732e737667" alt="Ottonenhof" height="150" width="150"></a></div>
              <div class="slide-in-right slide"><img src="https://camo.githubusercontent.com/370291c50b74eeab6fe66ccc9e6ca410fc117ed9/687474703a2f2f7069676d656e742e6769746875622e696f2f66616b652d6c6f676f732f6c6f676f732f766563746f722f636f6c6f722f7468652d7765622d776f726b732e737667" alt="Leiners" height="150" width="150"></a></div>
              <div class="slide-in-right slide"><img src="https://camo.githubusercontent.com/0112d20015b4dad56fbb07088e76552042539151/687474703a2f2f7069676d656e742e6769746875622e696f2f66616b652d6c6f676f732f6c6f676f732f766563746f722f636f6c6f722f70657465732d626c696e64732e737667" alt="Seitenalm" height="150" width="150"></a></div>
              <div class="slide-in-right slide"><img src="https://camo.githubusercontent.com/e4eb289d352d7c4cbb8493d6a212448036e3e2d2/687474703a2f2f7069676d656e742e6769746875622e696f2f66616b652d6c6f676f732f6c6f676f732f766563746f722f636f6c6f722f796f67612d626162792e737667" alt="Testerhof" height="150" width="150"></a></div>
          </section>
          
          
          <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
          
          <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
          
       <script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>  
       <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script> 
          
 <style>
    
/* Slick Slider */

.slick-prev, .slick-next {
  position: absolute;
  top: 135%;
  font-size: 1.8rem;
}

.slick-prev {
  left: 0;
}

.slick-next {
  right: 0;
}

.slick-slider {
  position: relative;
  display: block;
  box-sizing: border-box;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
      user-select: none;
  -webkit-touch-callout: none;
  -khtml-user-select: none;
  -ms-touch-action: pan-y;
      touch-action: pan-y;
  -webkit-tap-highlight-color: transparent;
}

.slick-list {
  position: relative;
  display: block;
  overflow: hidden;
  margin: 0;
  padding: 0;
}

.slick-list:focus {
  outline: none;
}

.slick-list.dragging {
  cursor: pointer;
  cursor: hand;
}

.slick-slider .slick-track,
.slick-slider .slick-list {
    -webkit-transform: translate3d(0, 0, 0);
       -moz-transform: translate3d(0, 0, 0);
        -ms-transform: translate3d(0, 0, 0);
         -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
}

.slick-track {
    position: relative;
    top: 0;
    left: 0;
    display: block;
}

.slick-track:before,
.slick-track:after {
    display: table;
    content: '';
}

.slick-track:after {
    clear: both;
}

.slick-loading .slick-track {
    visibility: hidden;
}

.slick-slide {
    display: none;
    float: left;
    height: 100%;
    min-height: 1px;
}

[dir='rtl'] .slick-slide {
    float: right;
}

.slick-slide img {
    display: block;
}

.slick-slide.slick-loading img {
    display: none;
}

.slick-slide.dragging img {
    pointer-events: none;
}
.slick-initialized .slick-slide {
    display: block;
}
.slick-loading .slick-slide {
    visibility: hidden;
}
.slick-vertical .slick-slide {
    display: block;
    height: auto;
    border: 1px solid transparent;
}

.slick-arrow.slick-hidden {
    display: none;
}

.slide {
    transition: filter .4s;
    margin: 0px 40px;
}

.fas {
    color: #96bd0b;
}
.slick-prev {
    left: 0;
}
.slick-prev, .slick-next {
    position: absolute;
    top: 35%;
    font-size: 1.8rem;
}

.section {
  max-width: 1200px;
  margin: 0 auto;
}
 </style>
 <script>
    
  $(document).ready(function(){
    $('.customer-logos').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: false,
    autoplaySpeed: 1500,
    arrows: true,
    dots: false,
    pauseOnHover: false,
    prevArrow: '<i class="slick-prev fas fa-angle-left"></i>',
    nextArrow: '<i class="slick-next fas fa-angle-right"></i>',
    responsive: [{
      breakpoint: 768,
      settings: {
        slidesToShow: 3
      }
    }, {
      breakpoint: 520,
      settings: {
        slidesToShow: 2
      }
    }]
    });
  });
 </script>



        {{-- @foreach ($sports as $sport)

        <div class="uk-container uk-container-center">
            <h1>{{$sport->name }}
            </h1>
        </div>
       
        
        <div class="uk-container uk-container-center">
            <div id="tm-middle"  data-uk-grid-match="" data-uk-grid-margin="">
                <div class="tm-main ">
                    <main id="tm-content" class="tm-content">
                        <div class="match-list-wrap">
                                    <table class="table table-bordered text-center">
                                        <thead class="table-dark">
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">League</th>
                                                <th scope="col">Logo</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Win</th>
                                                <th scope="col">Loss</th>
                                                <th scope="col">Points</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-white">
                                            @forelse ($sessions as $session)
                                            
                                            @if ($session->battle->session->sport_id == $sport->id)
                                                
                                           
                                           
   

                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $session->battle->session->name }}</td>
                                                    <td><img src="{{ asset('assets/team/'.$session->SessionTeam->team->image) }}" width="50px" alt="">
                                                    </td>
                                                    <td>{{ $session->SessionTeam->team->name }}</td>
                                                    <td>{{ $session->total_wins }}</td>
                                                    <td>{{ $session->total_losses }}</td>
                                                    <td>{{ $session->total_points }}</td>
                                                </tr>
                                                @endif
                                                @empty
                                                <tr class="text-center">
                                                    <td colspan="7" class="text-danger">No score added yet!</td>
                                                </tr>
                                                
                                            @endforelse
                                            
                                        </tbody>
                                        
                                    </table>
                          
                        </div>
                    </main>
                </div>

            </div>
        </div>
        @endforeach --}}

    </div>
    <br><br>

</x-layouts.website>
