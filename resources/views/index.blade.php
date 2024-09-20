<x-layouts.website  title="{{ $seoTitle['value'] }}" seoDec="{{$seoDec['value'] }}" seoAuth="{{$seoAuth['value'] }}" seoKey="{{$seoKey['value'] }}">

    <div class="tm-top-a-box tm-full-width  ">
        <div class="uk-container uk-container-center">
            <section id="tm-top-a" class="tm-top-a uk-grid uk-grid-collapse"
                data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">




                <div class="uk-width-1-1">
                    <div class="uk-panel">
                        <div class="akslider-module ">
                            <div class="uk-slidenav-position"
                                data-uk-slideshow="{height: 'auto', animation: 'swipe', duration: '500', autoplay: false, autoplayInterval: '7000', videoautoplay: true, videomute: true, kenburns: false}">
                                <ul class="uk-slideshow uk-overlay-active">
                                    {{-- {{dd($bannerData)}} --}}
                                   
                                       @for($i = 0; $i < count($bannerData); $i+=3)
                                       @if ($bannerData[$i]->value != null && $bannerData[$i+1] != null && $bannerData[$i+2] != null )
                                    @php
                                        $image = $bannerData[$i];
                                        $heading = $bannerData[$i+1];  
                                        $quote = $bannerData[$i+2];    
                                          
                                    @endphp
                                    {{-- {{dd($image) }} --}}
                                    <li aria-hidden="false" class="uk-height-viewport uk-active">
                                        <div style="background-image: url({{ asset('assets/banner/' . ($image->value ? $image->value : '')) }});"
                                            class="uk-cover-background uk-position-cover">
                                       
                                        </div>
                                        <img
                                            style="width: 100%; height: auto; opacity: 0;" class="uk-invisible"
                                            src="images/main-slider-img.jpg" alt="">
                                        <div class="uk-position-cover uk-flex-middle">
                                            <div class="uk-container uk-container-center uk-position-cover">
                                                <div class="va-promo-text uk-width-6-10 uk-push-4-10">
                                                    <h3 class="txtFilter">{{($heading->value ? $heading->value : '')}}</h3>
                                                    <div class="promo-sub txtFilter2">{{($quote->value ? $quote->value :'')}}</div>
                                                    <a href="{{route('about') }}" class="read-more">Read More<i
                                                            class="uk-icon-chevron-right"></i>
                                                        </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                       @endif
                                    @endfor
                               
                                    
                                </ul>
                                <a href="/" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous"
                                    data-uk-slideshow-item="previous"></a>
                                <a href="/" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next"
                                    data-uk-slideshow-item="next"></a>
                                <ul class="uk-dotnav uk-dotnav-contrast uk-position-bottom uk-text-center">
                                    <li class="uk-active" data-uk-slideshow-item="0"><a href="/">0</a>
                                    </li>
                                    <li data-uk-slideshow-item="1"><a href="/">1</a>
                                    </li>
                                    <li data-uk-slideshow-item="2"><a href="/">2</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>


    <div class="tm-top-b-box tm-full-width  ">
        <div class="uk-container uk-container-center">
           
            @if (isset($latestMatch[0]))
                <section id="tm-top-b" class="tm-top-b uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}"
                    data-uk-grid-margin="">
                    <div class="uk-width-1-1">
                        <div class="uk-panel">
                            <div class="va-latest-wrap">
                                <div class="uk-container uk-container-center">
                                    <div class="va-latest-top">
                                        <h3>Latest <span>Results</span></h3>
                                        <div class="tournament">
                                            <address style="text-transform:capitalize;">
                                                {{ $latestMatch[0]->SessionTeam->name }}<br><br></address>
                                        </div>
                                        <div class="date">
                                            {{ $latestMatch[0]->battle->battle_date }} |
                                            {{ $latestMatch[0]->battle->battle_time }} </div>
                                    </div>
                                </div>
                                <div class="va-latest-middle uk-flex uk-flex-middle">
                                    <div class="uk-container uk-container-center">
                                        <div class="uk-grid uk-flex uk-flex-middle">
                                            @if(count($latestMatch) > 1)
                                            <div class="uk-width-2-12 center">
                                                <a href="results.html">
                                                    
                                                    <img src="{{ asset('assets/team/'.$latestMatch[0]->SessionTeam->team->image) }}"
                                                        class="img-polaroid" alt="" title="">
                                                </a>
                                            </div>
                                            <div class="uk-width-3-12 name uk-vertical-align">
                                                <div class="wrap uk-vertical-align-middle">
                                                    {{ $latestMatch[0]->SessionTeam->team->name }}</div>
                                            </div>
                                            <div class="uk-width-2-12 score">
                                                <div class="title">score</div>
                                                <div class="table">
                                                    
                                                    <div class="left">{{ $latestMatch[0]->score }} </div>
                                                    
                                                    <div class="right"> {{ $latestMatch[1]->score }}</div>
                                                    
                                                    <div class="uk-clearfix"></div>
                                                </div>
                                            </div>
                                            <div class="uk-width-3-12 name alt uk-vertical-align">
                                                
                                                <div class="wrap uk-vertical-align-middle">
                                                    {{ $latestMatch[1]->SessionTeam->team->name }} 
                                                </div>
                                                
                                            </div>
                                            <div class="uk-width-2-12 center">
                                                
                                                <a href="results.html">
                                                    
                                                    <img src="{{ asset('assets/team/'.$latestMatch[1]->SessionTeam->team->image) }}"
                                                        class="img-polaroid" alt="" title="">
                                                </a>
                                                
                                            </div>
                                            @else
                                            <div class="uk-width-4-12 center">
                                                <a href="results.html">
                                                    
                                                    <img src="{{ asset('assets/team/'.$latestMatch[0]->SessionTeam->team->image) }}"
                                                        class="img-polaroid" alt="" title="">
                                                </a>
                                            </div>
                                            <div class="uk-width-6-12 name uk-vertical-align" style="text-align: center;">
                                                <div class="wrap uk-vertical-align-middle">
                                                    {{ $latestMatch[0]->SessionTeam->team->name }}</div>
                                            </div>
                                            <div class="uk-width-2-12 score">
                                                <div class="title">score</div>
                                                <div class="table">
                                                    
                                                    <div style="font-size: 33px;text-align: center;line-height: 70px;position: relative;">{{ $latestMatch[0]->score }} </div>
                                                    
                                                    <div class="uk-clearfix"></div>
                                                </div>
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-container uk-container-center">
                                    <div class="va-latest-bottom">
                                        <div class="uk-grid">
                                            <div class="uk-width-8-12 uk-container-center text">
                                                <p>Vivamus hendrerit, tortor sed luctus maximus, nunc urna hendrerit
                                                    nibh,
                                                    sit amet efficitur libero lorem quis mauris. Nunc a pulvinar lectus.
                                                    Pellentesque aliquam justo ut rhoncus lobortis. In sed venenatis
                                                    massa.
                                                    Sed sodales faucibus odio, eget tempus nibh accumsan ut. Fusce
                                                    tincidunt
                                                    semper finibus. Nullam consequat non leo interdum pulvinar.</p>
                                            </div>
                                        </div>

                                        <div class="uk-grid">
                                            <div class="uk-width-1-1">
                                                <div class="btn-wrap uk-container-center">
                                                    <a class="read-more" href="{{ route('matches') }}">More Info</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            @else
                <div class="d-flex align-content-center justify-content-center text-danger">No Latest Match Found!
                </div>
            @endif
        </div>
    </div>

    <br><br>
    <div class="tm-top-c-box tm-full-width  home-about">
        <div class="uk-container uk-container-center">
            <section id="tm-top-c" class="tm-top-c uk-grid uk-grid-collapse"
                data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">

                <div class="uk-width-1-1 uk-width-large-1-2">
                    <div class="uk-panel">
                        <div class="va-about-wrap clearfix uk-cover-background uk-position-relative">
                            <div class="va-about-text">
                                <div class="title">About <span>CPSAL</span>
                                </div>
                                {{-- {{dd($about) }} --}}
                                @if (($about))
                                @if ($about->value != "" && $about->value != NULL)
                                <p id="#container">{{($about->value) }}
                                </p>
                                @endif   
                                @endif
                                
                                
                                <a class="read-more" href="{{ route('about') }}">read more</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="uk-width-1-1 uk-width-large-1-2">
                    <div style="min-height: 497px;" class="uk-panel">
                        <div class="trainers-module tm-trainers-slider ">
                            <div class="trainer-wrapper">
                                <div data-uk-slideset="{default: 1, animation: 'fade', duration: 400}">
                                    <div class="trainer-top">
                                        <div class="trainers-btn">
                                            <a href="/"
                                                class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous"
                                                data-uk-slideset-item="previous"></a>
                                            <a href="/"
                                                class="uk-slidenav uk-slidenav-contrast uk-slidenav-next"
                                                data-uk-slideset-item="next"></a>
                                        </div>
                                        <h3>Top Coaches</h3>
                                    </div>
                                    <ul class="uk-grid uk-slideset uk-grid-width-1-1">
                                        @foreach ($users as $user)
                                            <li class="uk-active" style="">
                                                <div class="img-wrap"><img src="{{ asset('assets/coach/'.$user->avatar) }}"
                                                        alt="{{ $user->username }}">
                                                </div>
                                                <div class="name">{{ $user->username }}</span>
                                                </div>
                                            </li>
                                        @endforeach


                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>


    <div class="tm-top-d-box  ">
        <div class="uk-container uk-container-center">
            <section id="tm-top-d" class="tm-top-d uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}"
                data-uk-grid-margin="">

                <div class="uk-width-1-1">
                    <div class="uk-panel">
                        <div class="donate-wrap">
                            <div class="donate-inner">
                                <h3><span>About </span>Our <span>leagues</span></h3>
                                <div class="uk-grid">
                                    @if ($aboutleague)
                                    @if ($aboutleague->value != "" && $aboutleague->value != Null )
                                    <div class="uk-width-8-10 uk-push-1-10 intro-text">
                                        {{$aboutleague->value }}</div>
                                     @endif  
                                    @endif
                                    
                                    
                                </div>

                                <br><br>
                                <a class="donate-btn" type="submit" name="submit"
                                    href="{{ route('league') }}"><span>Read
                                        more</span></a>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <div class="tm-top-e-box tm-full-width  va-main-next-match">
        <div class="uk-container uk-container-center">
            <section id="tm-top-e" class="tm-top-e uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}"
                data-uk-grid-margin="">
                <div class="uk-width-1-1">
                    <div class="uk-panel">
                        <div class="uk-container uk-container-center">
                            <div class="uk-grid uk-grid-collapse">
                                <div class="uk-width-medium-1-2 uk-width-small-1-1 va-single-next-match">
                                    <div class="va-main-next-wrap">
                                        <div class="main-next-match-title"><em>Next <span>Match</span></em>
                                        </div>
                                        
                                        @if (isset($upcomingBattle))
                                        
                                            <div class="match-list-single">
                                                <div class="match-list-item">
                                                    <div class="count">

                                                        <div id="countdown4">
                                                            <div class="counter_container">
                                                            </div>
                                                        </div>

                                                        <div class="clearfix"></div>

                                                    </div>
                                                    <div class="clear"></div>

                                                    <div class="logo">
                                                        <a href="{{route('league')}}">
                                                            
                                                            <img src="{{ asset('assets/team/'.$upcomingBattle->byTeam->image) }}"
                                                                class="img-polaroid" alt="Team image" title="team">
                                                        </a>
                                                    </div>
                                                    
                                                    <div class="team-name">{{ $upcomingBattle->byTeam->name }}</div>
                                                    <div class="versus">
                                                        @if ($upcomingBattle->forTeam != null)
                                                        VS</div>

                                                        <div class="team-name">{{ $upcomingBattle->forTeam->name }}</div>
                                                        <div class="logo">
                                                            <a href="{{route('league')}}">
                                                                
                                                                <img src="{{ asset('assets/team/'.$upcomingBattle->forTeam->image) }}"
                                                                    class="img-polaroid" alt="team image" title="team">
                                                            </a>
                                                        </div> 

                                                        @endif
                                                        
                                                    <div class="clear"></div>
                                                    <div class="date">{{ $upcomingBattle->battle_date }} |
                                                        {{ $upcomingBattle->battle_time }} </div>
                                                    <div class="clear"></div>
                                                    <div class="location">
                                                        <address>{{ $upcomingBattle->destination }}<br><br></address>
                                                    </div>
                                                </div>
                                            </div>
                                        
                                            
                                        @endif
                                    </div>
                                </div>

                                <div class="uk-width-medium-1-2 uk-width-small-1-1 va-list-next-match">
                                    @forelse ($battles as $battle)
                                    @if ($battle->battle_date >= now())
                                    <div class="match-list-wrap">

                                        <div class="match-list-item alt">
                                            <div class="date">
                                                {{ date('d M Y', strtotime($battle->battle_date)) }} </div>
                                            <div class="wrapper">
                                                <div class="logo">
                                                    <a href="{{route('league')}}">
                                                        
                                                        <img src="{{ asset('assets/team/'.$battle->byTeam->image) }}"
                                                            class="img-polaroid" alt="By team" title="By team">
                                                    </a>
                                                </div>
                                                <div class="team-name">{{ $battle->byTeam->name }}</div>
                                                @if($battle->forTeam)
                                                <div class="versus">VS</div>
                                                
                                                <div class="team-name">{{ $battle->forTeam->name }} </div>
                                                
                                                <div class="logo">
                                                    <a href="{{route('league')}}">
                                                        
                                                        <img src="{{ asset('assets/team/'.$battle->forTeam->image) }}"
                                                            class="img-polaroid" alt="for team" title="For Team">
                                                    </a>
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    
                                    @endif
                                    
                                       
                                    @empty
                                        <div class="text-center">
                                            <p class="text-danger">
                                                No Match Added Yet!
                                            </p>
                                        </div>
                                    @endforelse
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <div class="tm-top-f-box tm-full-width  va-main-our-news">
        <div class="uk-container uk-container-center">
            <section id="tm-top-f" class="tm-top-f uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}"
                data-uk-grid-margin="">
                <div class="uk-width-1-1">
                    <div class="uk-panel">
                        <div class="uk-container uk-container-center">
                            <div class="uk-grid uk-grid-collapse" data-uk-grid-match="">
                                <div class="uk-width-1-1">
                                    <div class="our-news-title">
                                        <h3>Our <span>Matches</span></h3>
                                    </div>
                                    <div class="our-news-text">
                                        @if ($ourmatchcontent)
                                        @if ($ourmatchcontent->value != "" && $ourmatchcontent->value != null)
                                        {{$ourmatchcontent->value }}
                                   @endif 
                                        @endif
                                          
                                    </div>
                                </div>
                                    @if ($imgcard1)
                                    <article
                                    class="uk-width-large-1-2 uk-width-medium-1-1 uk-width-small-1-1 our-news-article"
                                    data-uk-grid-match="">
                                    <div class="img-wrap uk-cover-background uk-position-relative"
                                        style="background-image: url('{{ asset('assets/card/'.$imgcard1->value)}}'); min-height: 280px;">


                                        <a href="{{ route('matches') }}"></a>
                                        @if ($imgcard1->value != "" && $imgcard1->value != null)
                                        
                                            <img class="uk-invisible"
                                            src=""
                                            alt="">
                                        @else
                                        <img class="uk-invisible"
                                            src="{{ asset('assets/card/basketball-ball-wooden-hardwood-floor.jpg') }}"
                                            alt="">
                                        @endif
                                        

                                    </div>  
                                    @endif
                               @if ($headingcard1)
                               <div style="min-height: 280px;" class="info">

                                <div class="name">
                                    <h4>
                                        <a href="{{ route('matches') }}">
                                            @if ($headingcard1->value != "" && $headingcard1->value != null)
                                                {{$headingcard1->value }}
                                            @endif
                                            
                                        </a>
                                    </h4>
                                </div>
                                <div class="text">
                                    <p>
                                        @if ($cardcontent1->value != null && $cardcontent1->value != "")
                                            {{$cardcontent1->value }}
                                       @endif
                                        </p>
                                    <div class="read-more"><a href="{{ route('matches') }}">Read More</a>
                                    </div>
                                </div>
                            </div>

                               @endif
                                    
                                </article>
                                @if ($imgcard2)
                                <article
                                class="uk-width-large-1-2 uk-width-medium-1-1 uk-width-small-1-1 our-news-article"
                                data-uk-grid-match="">
                                <div class="img-wrap uk-cover-background uk-position-relative"
                                    style="background-image: url('{{ asset('assets/card/'.$imgcard2->value)}}'); min-height: 280px;">


                                    <a href="{{ route('matches') }}"></a>
                                    @if ($imgcard1->value != "" && $imgcard2->value != null)
                                    
                                        <img class="uk-invisible"
                                        src=""
                                        alt="">
                                    @else
                                    <img class="uk-invisible"
                                        src="{{ asset('assets/card/basketball-ball-wooden-hardwood-floor.jpg') }}"
                                        alt="">
                                    @endif
                                    

                                </div>
                                @endif
                                @if ($headingcard2)
                                <div style="min-height: 280px;" class="info">

                                    <div class="name">
                                        <h4>
                                            <a href="{{ route('matches') }}">
                                                @if ($headingcard2->value != "" && $headingcard2->value != null)
                                                    {{$headingcard2->value }}
                                                @endif
                                                
                                            </a>
                                        </h4>
                                    </div>
                                    <div class="text">
                                        <p>
                                            @if ($cardcontent2->value != null && $cardcontent2->value != "")
                                                {{$cardcontent2->value }}
                                           
                                            @endif
                                            </p>
                                        <div class="read-more"><a href="{{ route('matches') }}">Read More</a>
                                        </div>
                                    </div>
                                </div>

                            </article>
                                @endif
                                    
                                

                                

                            </div>
                        </div>
                        <div class="all-news-btn"><a href="{{ route('matches') }}"><span>Read More</span></a>
                        </div>

                    </div>
                </div>
            </section>
        </div>
    </div>
    @if ($gallerypic != null)
    <div class="tm-top-g-box tm-full-width  ">
        <div class="uk-container uk-container-center">
            <div id="tm-middle" class="tm-middle uk-grid" data-uk-grid-match="" data-uk-grid-margin="">
                <div class="tm-main uk-width-medium-1-1 uk-row-first">
                    <main id="tm-content" class="tm-content">
    
                        <div class="uk-container uk-container-center tt-gallery-top">
                            <div class="uk-grid" data-uk-grid-match="">
                                <div class="uk-width-3-10 title">{{$Heading->value}}</div>
                                <div class="uk-width-7-10 text">{{$Paragraph->value}}</div>
                            </div>
                        </div>
                        <div style="height: 54px;" class="uk-sticky-placeholder">
                            <div style="margin: 0px;" class="button-group filter-button-group"
                                >
                                <div class="uk-container uk-container-center">
                                    <button class="active" data-filter="*">all</button>
                                    @foreach ($filter as $galleryfilter)
                                        <button class=""
                                            data-filter=".{{ $galleryfilter->name }}">{{ $galleryfilter->name }}</button>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                         <div class="uk-grid uk-grid-collapse grid" data-uk-grid-match="">
                                @foreach ($gallerypic as $picture)
                                    <div
                                        class="uk-width-1-1 uk-width-medium-1-2 uk-width-large-1-4 grid-item {{ $picture->filter }}">
                                        <div class="gallery-album">
                                            <a href="{{ asset('assets/gallery/'.$picture->picture) }}"
                                                data-uk-lightbox="{group:'my-group'}" class="img-0">
                                                
                                                <img style="object-fit:cover;" src="{{ asset('assets/gallery/'.$picture->picture) }}"
                                                    alt="">
                                            </a>
                                            <a href="{{ asset('assets/images/Off_they_go._There_had_been_a_false_start_and_the_runner_was_shown_a_great_big_red_card_then_marched_off._So_mean._(7745214550).jpg') }}"
                                                data-uk-lightbox="{group:'my-group'}" class="img-1">
                                                <img style="object-fit: cover"
                                                    src="{{ asset('assets/images/Off_they_go._There_had_been_a_false_start_and_the_runner_was_shown_a_great_big_red_card_then_marched_off._So_mean._(7745214550).jpg') }}"
                                                    alt="">
                                            </a>
                                            <div class="titles">
                                                
                                                <div class="sub-title">{{ $picture->filter }} </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                    </div>
                    </main>
                </div>
            </div>
        </div>
    </div>
    @else
      <div class="tm-bottom-a-box tm-full-width  ">
            <div class="uk-container uk-container-center">
                <section id="tm-bottom-a" class="tm-bottom-a uk-grid uk-grid-collapse"
                    data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">
                    <div class="uk-width-1-1">
                        <div class="uk-panel tt-achievments-wrap">
                            <div class="uk-grid uk-grid-collapse">
                                <div class="uk-width-large-4-10 uk-width-medium-1-1 achievments-block">
                                    <div class="our-awards-main-wrap">
                                        <div class="uk-slidenav-position our-awards"
                                            data-uk-slider="{autoplay:true, autoplayInterval:7000}">
                                            <div class="our-awards-main-title">
                                                <h2>Our <span>Awards</span></h2>
                                                <div class="our-awards-btn">
                                                    <a draggable="false" href="/"
                                                        class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous"
                                                        data-uk-slider-item="previous"></a>
                                                    <a draggable="false" href="/"
                                                        class="uk-slidenav uk-slidenav-contrast uk-slidenav-next"
                                                        data-uk-slider-item="next"></a>
                                                </div>
                                            </div>
                                            <div class="uk-slider-container">
                                                <ul class="uk-slider uk-grid uk-grid-width-large-1-2">
                                                    <li>
                                                        <div class="img-wrap"><img draggable="false"
                                                                src="{{ asset('assets/images/award-img.png') }}" alt="">
                                                        </div>
                                                        <div class="text">2014 world cup champion</div>
                                                    </li>
                                                    <li>
                                                        <div class="img-wrap"><img draggable="false"
                                                                src="{{ asset('assets/images/award-img1.png') }}" alt="">
                                                        </div>
                                                        <div class="text">2014 world cup champion</div>
                                                    </li>
                                                    <li>
                                                        <div class="img-wrap"><img draggable="false"
                                                                src="{{ asset('assets/images/award-img2.png') }}" alt="">
                                                        </div>
                                                        <div class="text">2014 world cup champion</div>
                                                    </li>
                                                    <li>
                                                        <div class="img-wrap"><img draggable="false"
                                                                src="{{ asset('assets/images/award-img3.png') }}" alt="">
                                                        </div>
                                                        <div class="text">2014 world cup champion</div>
                                                    </li>
                                                    <li>
                                                        <div class="img-wrap"><img draggable="false"
                                                                src="{{ asset('assets/images/award-img4.png') }}" alt="">
                                                        </div>
                                                        <div class="text">2014 world cup champion</div>
                                                    </li>
                                                    <li>
                                                        <div class="img-wrap"><img draggable="false"
                                                                src="{{ asset('assets/images/award-img5.png') }}" alt="">
                                                        </div>
                                                        <div class="text">2014 world cup champion</div>
                                                    </li>
                                                    <li>
                                                        <div class="img-wrap"><img draggable="false"
                                                                src="{{ asset('assets/images/award-img3.png') }}" alt="">
                                                        </div>
                                                        <div class="text">2014 world cup champion</div>
                                                    </li>
                                                    <li>
                                                        <div class="img-wrap"><img draggable="false"
                                                                src="{{ asset('assets/images/award-img.png') }}" alt="">
                                                        </div>
                                                        <div class="text">2014 world cup champion</div>
                                                    </li>
                                                    <li>
                                                        <div class="img-wrap"><img draggable="false"
                                                                src="{{ asset('assets/images/award-img1.png') }}" alt="">
                                                        </div>
                                                        <div class="text">2014 world cup champion</div>
                                                    </li>
                                                    <li>
                                                        <div class="img-wrap"><img draggable="false"
                                                                src="images/award-img2.png" alt="">
                                                        </div>
                                                        <div class="text">2014 world cup champion</div>
                                                    </li>
                                                    <li>
                                                        <div class="img-wrap"><img draggable="false"
                                                                src="{{ asset('assets/images/award-img3.png') }}" alt="">
                                                        </div>
                                                        <div class="text">2014 world cup champion</div>
                                                    </li>
                                                    <li>
                                                        <div class="img-wrap"><img draggable="false"
                                                                src="{{ asset('assets/images/award-img4.png') }}" alt="">
                                                        </div>
                                                        <div class="text">2014 world cup champion</div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-width-large-5-10 uk-width-medium-1-1 achievments-block uk-push-1-10">
                                    <div class="achievments-inner">
                                        <div class="our-awards-main-title">
                                            <h2>achievements</h2>
                                        </div>
                                        <div class="uk-grid">
                                            <div class="uk-width-large-2-4 uk-width-medium-1-2 uk-width-small-1-2">
                                                <div class="item">
                                                    <div class="icon"><img src="images/stat-icon.png" alt="">
                                                    </div>
                                                    <div class="info">
                                                        <div class="number">35</div>
                                                        <div class="text">goals</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="uk-width-large-2-4 uk-width-medium-1-2 uk-width-small-1-2">
                                                <div class="item">
                                                    <div class="icon"><img src="images/stat-icon1.png" alt="">
                                                    </div>
                                                    <div class="info">
                                                        <div class="number">12</div>
                                                        <div class="text">games played</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="uk-width-large-2-4 uk-width-medium-1-2 uk-width-small-1-2">
                                                <div class="item">
                                                    <div class="icon"><img src="images/stat-icon2.png" alt="">
                                                    </div>
                                                    <div class="info">
                                                        <div class="number">13</div>
                                                        <div class="text">violations</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="uk-width-large-2-4 uk-width-medium-1-2 uk-width-small-1-2">
                                                <div class="item">
                                                    <div class="icon"><img src="images/stat-icon3.png" alt="">
                                                    </div>
                                                    <div class="info">
                                                        <div class="number">8</div>
                                                        <div class="text">Awards</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div> 
    @endif
    

   
    <br><br><br>
    <div class="tm-bottom-b-box tm-full-width  ">
        <div class="uk-container uk-container-center">
            <section id="tm-bottom-b" class="tm-bottom-b uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}"
                data-uk-grid-margin="">
                <div class="uk-width-1-1">
                    <div class="uk-panel">
                        <div class="our-team-main-wrap">
                            <div class="uk-container uk-container-center">
                                <div class="uk-grid" data-uk-grid-match="">
                                    <div class="uk-width-medium-8-10 uk-width-small-1-1 uk-push-1-10">
                                        <div class="our-team-wrap">
                                            <div class="our-team-title">
                                                <h3 style="color: white"><span>Our</span> Top <span>Players</span></h3>
                                            </div>
                                            <div class="our-team-text">
                                                {{-- <p>Nullam quis eros tellus. Duis sit amet neque nec orci feugiat
                                                    tincidunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                    Nulla sed turpis aliquet, pharetra enim sit amet, congue erat.</p> --}}
                                            </div>
                                            <div class="our-team-text additional">
                                                <p>Cras convallis feugiat felis eget venenatis. Sed leo tellus, luctus
                                                    eget ante quis, rutrum dignissim enim. Morbi efficitur tellus non
                                                    mauris tincidunt feugiat. Vestibulum quis nunc in nibh eleifend
                                                    convallis. Vestibulum nec viverra dui. Suspendisse vel neque eros.
                                                    Donec tincidunt tempus massa sed vehicula. Integer ullamcorper at
                                                    elit eu commodo.</p>
                                            </div>
                                            <div class="team-read-wrap"><a class="team-read-more"
                                                    href="{{ route('players') }}">Read
                                                    More</a>
                                            </div>
                                        </div>
                                    </div>

                                    @foreach ($topPlayers as $player)
                                        <div
                                            class=" uk-width-large-1-4 uk-width-medium-1-3 uk-width-small-1-2 player-item tt_2a195f12da9f3f36da06e6097be7e451">
                                            <div class="player-article">
                                                <div class="wrapper">

                                                    <div class="info">
                                                        <div class="name">
                                                            <h3>
                                                                <a
                                                                    href="{{ route('players') }}">{{ $player->player->name }}</a>
                                                            </h3>
                                                        </div>
                                                        <div class="position">Team: <span
                                                                style="color: #ffc722; font-weight:500;">{{ $player->team->name }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach



                                </div>
                            </div>

                            <div class="our-team-btn"><a href="{{ route('players') }}"><span>More Info</span></a>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        </div>
    </div>


    <br><br>

    <div class="tm-bottom-e-box tm-full-width  ">
        <div class="uk-container uk-container-center">

            <div class="container">

                <div class="our-team-title" style="text-align: center">
                    <h1>Law <span style="color:#ffc722"> Of </span>Play</h1>
                </div>
                <div id="accordion" class="accordion">        
                </div>
                <div id="accordion" class="accordion"> 
                    @for($i = 0; $i < count($frequentquest); $i+=2)
                    @if ($frequentquest[$i]->value != "" && $frequentquest[$i]->value != Null && $frequentquest[$i+1]->value != "" && $frequentquest[$i+1]->value != Null)
                    @php
                    $question2 = $frequentquest[$i];
                    $answer2 = $frequentquest[$i+1];  
                                          
                    @endphp
                    

                    <div class="card">
                        <div class="card-header"\>
                            <h5 class="mb-0">
                                <a data-toggle="collapse" href="#collapsee{{$i}}" style="font-size:15px;">
                                    {{$question2->value}}</a>
                            </h5>
                        </div>
                        <div id="collapsee{{$i}}" class="collapse">
                            <div class="card-body">
                                <span style="color: #363533; font-size: 20px; font-weight:500;">
                                                                     
                                </span>
                                <br> 
                                {{$answer2->value}}
                            </div>
                        </div>
                    </div>
                   
                    @endif
                   @endfor  

                   @for($i = 0; $i < count($lawofplay); $i+=2)
                    @if ($lawofplay[$i]->value != "" && $lawofplay[$i]->value != Null && $lawofplay[$i+1]->value != "" && $lawofplay[$i+1]->value != Null)
                    @php
                    $question2 = $lawofplay[$i];
                    $answer2 = $lawofplay[$i+1];  
                                          
                    @endphp
                    

                    <div class="card">
                        <div class="card-header"\>
                            <h5 class="mb-0">
                                <a data-toggle="collapse" href="#collapseea{{$i}}" style="font-size:15px;">
                                    {{$question2->value}}</a>
                            </h5>
                        </div>
                        <div id="collapseea{{$i}}" class="collapse">
                            <div class="card-body">
                                <span style="color: #363533; font-size: 20px; font-weight:500;">
                                                                     
                                </span>
                                <br> 
                                <a href="{{ asset('assets/lawofplay/' . $answer2->value) }}" download
                                    title="Download File " class="btn btn-warning text-white"><i
                                        class="fa fa-download">Download</i></a>
                            </div>
                        </div>
                    </div>
                   
                    @endif
                   @endfor  
                   
                </div>
            </div>





        </div>
    </div>

    <br><br>
    <div class="tm-bottom-e-box tm-full-width  ">
        <div class="uk-container uk-container-center">
            <section id="tm-bottom-e" class="tm-bottom-e uk-grid uk-grid-collapse"
                data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">

                <div class="uk-width-1-1">
                    <div class="uk-panel">
                        <div class="map-wrap">

                            <div class="contact-form-wrap uk-flex">
                                <div class="uk-container uk-container-center uk-flex-item-1">
                                    <div class="uk-grid  uk-grid-collapse uk-flex-item-1 uk-height-1-1 uk-nbfc">
                                        <div class="uk-width-5-10 contact-left uk-vertical-align contact-left-wrap">
                                            <div class="contact-info-lines uk-vertical-align-middle">  

                                    @if($contacts)
                                    {{-- {{dd($contacts) }} --}}
                                         
                                    
                                         @for($i = 0; $i < count($contacts); $i+=4)
                                             
                                             <?php
                                             $name = $contacts[$i];
                                             $phone = $contacts[$i+1];
                                             $mail = $contacts[$i+2];
                                             $location = $contacts[$i+3];
                                             ?> 
                                            
                                         <div class="item phone"><span class="icon"><i
                                             class="uk-icon-phone"></i></span>{{$name->value?$name->value:'Name'}}</div>
                                 <div class="item mail"><span class="icon"><i
                                             class="uk-icon-envelope"></i></span><a
                                         href="mailto:support@cpsal.com">{{$mail->value?$mail->value:'Email Address'}}</a>
                                 </div>
                                 <div class="item location" style="padding-right: 150px !important"><span class="icon"><i
                                             class="uk-icon-map-marker"></i></span>{{$location->value?$location->value:'Address'}}</div>
                             </div>
                                         @endfor
                                         
                                     
                                     
                                    @endif
                                                
                                        </div>
                                        <div class="uk-width-medium-5-10 uk-width-small-1-1 contact-right-wrap">
                                            <div class="contact-form uk-height-1-1">
                                                <div class="uk-position-cover uk-flex uk-flex-column uk-flex-center">
                                                    <div class="contact-form-title">
                                                        <h2>Get in touch</h2>
                                                    </div>
                                                    <div id="aiContactSafe_form_1">
                                                        <div class="aiContactSafe" id="aiContactSafe_mainbody_1">
                                                            <div class="contentpaneopen">
                                                                <div id="aiContactSafeForm">
                                                                    <form method="post" id="adminForm_1"
                                                                        name="adminForm_1">
                                                                        <div id="displayAiContactSafeForm_1">
                                                                            <div class="aiContactSafe"
                                                                                id="aiContactSafe_contact_form">
                                                                                <div class="aiContactSafe"
                                                                                    id="aiContactSafe_info"></div>
                                                                                <div class="aiContactSafe_row"
                                                                                    id="aiContactSafe_row_aics_name">
                                                                                    <div
                                                                                        class="aiContactSafe_contact_form_field_label_left">
                                                                                        <span
                                                                                            class="aiContactSafe_label"
                                                                                            id="aiContactSafe_label_aics_name"><label
                                                                                                for="aics_name">Name</label></span>&nbsp;
                                                                                        <label
                                                                                            class="required_field">*</label>
                                                                                    </div>
                                                                                    <div
                                                                                        class="aiContactSafe_contact_form_field_right">
                                                                                        <input name="aics_name"
                                                                                            id="aics_name"
                                                                                            class="textbox"
                                                                                            placeholder="Name"
                                                                                            value=""
                                                                                            type="text">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="aiContactSafe_row"
                                                                                    id="aiContactSafe_row_aics_email">
                                                                                    <div
                                                                                        class="aiContactSafe_contact_form_field_label_left">
                                                                                        <span
                                                                                            class="aiContactSafe_label"
                                                                                            id="aiContactSafe_label_aics_email"><label
                                                                                                for="aics_email">E-mail</label></span>&nbsp;
                                                                                        <label
                                                                                            class="required_field">*</label>
                                                                                    </div>
                                                                                    <div
                                                                                        class="aiContactSafe_contact_form_field_right">
                                                                                        <input name="aics_email"
                                                                                            id="aics_email"
                                                                                            class="email"
                                                                                            placeholder="Email"
                                                                                            value=""
                                                                                            type="text">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="aiContactSafe_row"
                                                                                    id="aiContactSafe_row_aics_message">
                                                                                    <div
                                                                                        class="aiContactSafe_contact_form_field_label_left">
                                                                                        <span
                                                                                            class="aiContactSafe_label"
                                                                                            id="aiContactSafe_label_aics_message"><label
                                                                                                for="aics_message">Message</label></span>&nbsp;
                                                                                        <label
                                                                                            class="required_field">*</label>
                                                                                    </div>
                                                                                    <div
                                                                                        class="aiContactSafe_contact_form_field_right">
                                                                                        <textarea name="aics_message" id="aics_message" cols="40" rows="10" class="editbox"
                                                                                            placeholder="Message"></textarea>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <br>
                                                                        <br>
                                                                        <div id="aiContactSafeBtns">
                                                                            <div id="aiContactSafeButtons_center"
                                                                                style="clear:both; display:block; text-align:center;">
                                                                                <table
                                                                                    style="margin-left:auto; margin-right:auto;">
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td>
                                                                                                <div
                                                                                                    id="aiContactSafeSend_loading_1">
                                                                                                    &nbsp;</div>
                                                                                            </td>
                                                                                            <td
                                                                                                id="td_aiContactSafeSendButton">
                                                                                                <input
                                                                                                    id="aiContactSafeSendButton"
                                                                                                    value="Send"
                                                                                                    type="submit">
                                                                                            </td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                        <br>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            <script>
                                window.map = false;



                                function initialize() {
                                    var myLatlng = new google.maps.LatLng(50.3915097, -4.1306689);

                                    var mapOptions = {
                                        zoom: 16,
                                        center: myLatlng,
                                        mapTypeId: google.maps.MapTypeId.ROADMAP,
                                        scrollwheel: false,

                                        streetViewControl: false,
                                        overviewMapControl: false,
                                        mapTypeControl: false

                                    };

                                    window.map = new google.maps.Map(document.getElementById('map'), mapOptions);

                                }

                                google.maps.event.addDomListener(window, 'load', initialize);
                            </script>
                            <div id="map"></div>

                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.accordion .card-header').click(function() {
                $(this).toggleClass('active');
                $(this).next('.card-body').slideToggle();
            });

     
            $('.accordion .card-header').first().addClass('active');
            $('.accordion .card-header').first().next('.card-body').slideDown();
        });


    
        $(document).ready(function() {
            var data = "Nam quis purus sed est interdum sagittis sed in leo. Nunc feugiat enim nunc, sit amet placerat erat consectetur in. Cras consequat enim nunc, sit amet venenatis massa volutpat ut. Cras vitae facilisis nulla. Nulla pharetra lobortis nisl, vitae pretium nunc congue eget. Nunc imperdiet consequat nibh pharetra venenatis. Duis vitae lacinia nibh, et egestas leo. Proin sed mi sit amet dolor rhoncus tristique. Maecenas rhoncus felis vel congue commodo.";

          
            var splitData = data.replace(/(\r\n|\n|\r)/gm, '</p>$1');

          
            var finalData = '<p>' + splitData + '</p>';

           
            $('#container').append(finalData);
        });
    

let elements = document.getElementsByClassName("txtFilter");

Array.from(elements).forEach((element) => {
  let txt = element.innerHTML;
  let oldTxt = txt.split(" ");

  if (oldTxt.length > 0) {
    if (oldTxt.length > 1) {
      let halfIndex = Math.floor(oldTxt.length / 2);
      let newTxt = "";
      oldTxt.forEach((e, key) => {
        if (key == halfIndex) {
          newTxt += "<span style='color:#ffc722'>";
        }
        if (key != 0 && key != oldTxt.length) {
          newTxt += " ";
        }
        newTxt += e;
        if (key == oldTxt.length - 1) {
          newTxt += "</span>";
        }
      });
      element.innerHTML = newTxt;
    }
  }
});


let elements2 = document.getElementsByClassName("txtFilter2");

Array.from(elements2).forEach((element) => {
  let txt = element.innerHTML;
  let oldTxt = txt.split(" ");


  if (oldTxt.length > 0) {
    if (oldTxt.length > 2) {
      let halfIndex = Math.floor(oldTxt.length / 3);
      let newTxt = "";
      oldTxt.forEach((e, key) => {
        if (key == halfIndex) {
          newTxt += "<span style='color:#ffc722'>";
        }
        if (key != 0 && key != oldTxt.length) {
          newTxt += " ";
        }
        newTxt += e;
        if (key == oldTxt.length - 2) {
          newTxt += "</span>";
        }
      });
      element.innerHTML = newTxt;
    }
  }
});



    </script>


</x-layouts.website>
