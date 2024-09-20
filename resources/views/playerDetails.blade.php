<x-layouts.website  title="{{ $seoTitle['value'] }}" seoDec="{{$seoDec['value'] }}" seoAuth="{{$seoAuth['value'] }}" seoKey="{{$seoKey['value'] }}">


    <div class="tm-top-a-box tm-full-width tm-box-bg-1 ">
        <div class="uk-container uk-container-center">
            <section id="tm-top-a" class="tm-top-a uk-grid uk-grid-collapse" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">

                <div class="uk-width-1-1 uk-row-first">
                    <div class="uk-panel">
                        <div class="uk-cover-background uk-position-relative head-wrap" style="height: 290px; background-image: url('{{asset('assets/images/head-bg.jpg')}}');">
                            <img class="uk-invisible" src="{{asset('assets/images/head-bg.jpg')}}" alt="" height="290" width="1920">
                            <div class="uk-position-cover uk-flex uk-flex-center head-title">
                                <h1>Players</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <div class="uk-container uk-container-center alt">
        <ul class="uk-breadcrumb">
            <li><a href="index.html">Home</a>
            </li>
            <li><a href="players.html">Players</a>
            </li>
            <li class="uk-active"><span>{{ $player->name }} </span>
            </li>
        </ul>
    </div>


    <div class="uk-container uk-container-center">
        <div id="tm-middle" class="tm-middle uk-grid" data-uk-grid-match="" data-uk-grid-margin="">
            <div class="tm-main uk-width-medium-1-1 uk-row-first">
                <main id="tm-content" class="tm-content">
                    <div id="system-message-container"></div>
                    <div class="contentpaneopen">
                        <article class="player-single tt-players-page">
                            <div class="uk-container uk-container-center alt">
                                <div class="uk-gfid">
                                </div>
                            </div>
                            <div class="player-top">
                                <div class="uk-container uk-container-center alt">
                                    <div class="uk-grid">
                                    
                                        <div class="uk-width-6-12">
                                            <div class="name">
                                                <h2>
                                                    {{ $player->name }}                        
                                                </h2>
                                            </div>
                                            <div class="wrap">
                                                <ul class="info">
                                                    @foreach ($player->sportAttributeValues as $sportAttributeValue)
                                                        <li><span>{{ $sportAttributeValue->sportAttribute->name }}</span><span>{{ $sportAttributeValue->value }}</span></li>
                                                    @endforeach
                                               
                                                </ul>
                                                <ul class="socials">
                                                    <li class="twitter"><a href="http://twitter.com/" target="_blank" rel="nofollow">
                                                        </a>
                                                    </li>
                                                    <li class="facebook"><a href="http://facebook.com/" target="_blank" rel="nofollow">
                                                        </a>
                                                    </li>
                                                    <li class="google-plus"><a href="https://plus.google.com/" target="_blank" rel="nofollow">
                                                        </a>
                                                    </li>
                                                    <li class="pinterest"><a href="https://www.pinterest.com" target="_blank" rel="nofollow">
                                                        </a>
                                                    </li>
                                                    <li class="linkedin"><a href="https://www.linkedin.com" target="_blank" rel="nofollow">
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-container uk-container-center alt">
                                <div class="uk-grid">
                                    <div class="uk-width-1-1">
                                        <div class="line"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-container uk-container-center alt">
                                <div class="uk-grid">
                                    <div class="uk-width-9-10 uk-push-1-10">
                                        <div class="player-total-info">
                                            <p><strong>Aenean lobortis eu nibh eu euismod. In ullamcorper, velit sed tincidunt tempor, ante elit euismod magna, vel scelerisque odio velit nec arcu. Nulla dolor sapien, vehicula sit amet augue nec, consequat aliquet velit. Donec euismod interdum mauris id dapibus.</strong></p>
                                            <p>Fusce mollis ante dolor, in tincidunt justo vehicula id. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam nec tortor sit amet metus vestibulum sagittis. Donec sed dignissim nisi. Pellentesque ac dolor vestibulum, sollicitudin leo ac, pretium nulla. Mauris sit amet mattis turpis, eu molestie lectus. Donec semper sem ac dolor euismod vulputate. Quisque massa elit, viverra et euismod nec, porta eget elit. Aliquam molestie tempus ex, ut iaculis tortor eleifend ac. Aliquam id massa facilisis, iaculis orci et, ornare augue. Fusce eget sollicitudin est. Fusce ultrices enim ut aliquam sollicitudin.</p>
                                            <ul>
                                                <li>Maecenas a nisl in turpis fermentum imperdiet;</li>
                                                <li>Nullam at diam et odio consectetur fermentum;</li>
                                                <li>Maecenas volutpat lacus quis sem congue egestas;</li>
                                                <li>Quisque sit amet nunc quis quam tincidunt scelerisque;</li>
                                                <li>Maecenas vestibulum ligula sed augue dictum, quis tincidunt nulla pellentesque;</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <div>
                            <div class="other-players-wrap">
                                <div class="uk-container uk-container-center alt">
                                    <div class="uk-grid">
                                        <div class="uk-width-1-1">
                                            <h3 class="other-post-title">Other <span>Players</span></h3>
                                            <div dir="ltr" class="uk-slidenav-position player-slider" data-uk-slider="">
                                                <div class="uk-slider-container">
                                                    <div class="player-slider-btn">
                                                        <a draggable="false" href="/" class="uk-slidenav uk-slidenav-previous" data-uk-slider-item="previous"></a>
                                                        <a draggable="false" href="/" class="uk-slidenav uk-slidenav-next" data-uk-slider-item="next"></a>
                                                    </div>
                                                    <ul class="uk-slider uk-grid uk-grid-width-1-4">
                                                        @foreach ($players as $player)
                                                            <li class="player-item">
                                                                <div class="player-article">
                                                                    <div class="wrapper">
                                                                     
                                                                        <div class="info">
                                                                            <div class="name">
                                                                                <h3>
                                                                                    <a draggable="false" href="{{ route('playerDetails',$player->id) }}">{{ $player->name }}</a>
                                                                                </h3>
                                                                            </div>
                                                                            <div class="position">{{ $player->team->name }}</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        @endforeach
                                                  
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>
</x-layouts.website>
