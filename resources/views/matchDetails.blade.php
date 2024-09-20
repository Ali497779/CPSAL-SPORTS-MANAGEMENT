<x-layouts.website  title="{{ $seoTitle['value'] }}" seoDec="{{$seoDec['value'] }}" seoAuth="{{$seoAuth['value'] }}" seoKey="{{$seoKey['value'] }}">


    <div class="over-wrap">
        <div class="tm-top-a-box tm-full-width tm-box-bg-1 ">
            <div class="uk-container uk-container-center">
                <section id="tm-top-a" class="tm-top-a uk-grid uk-grid-collapse"
                    data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">
                    <div class="uk-width-1-1 uk-row-first">
                        <div class="uk-panel">
                            <div class="uk-cover-background uk-position-relative head-match-wrap"
                                style="height: 590px; background-image: url('{{ asset('assets/images/head-bg-match.jpg') }}');">
                                <img class="uk-invisible" src="{{ asset('assets/images/head-bg-match.jpg') }}"
                                    alt="">
                                <div class="uk-position-cover uk-flex-center head-news-title">
                                    <h1>
                                        {{ $battle->byTeam->name }} VS {{ $battle->forTeam->name }}
                                    </h1>
                                    <div class="clear"></div>
                                    <div class="uk-container uk-container-center">
                                        <div class="uk-grid no-marg">
                                            <div class="uk-width-6-10 va-single-next-match match-view-wrap">
                                                <div class="va-main-next-wrap">
                                                    <div class="match-list-single">
                                                        <div class="match-list-item">
                                                            <div class="count">
                                                                <div id="countdown4">
                                                                    <div class="counter_container"></div>
                                                                </div>
                                                                <div class="clearfix"></div>

                                                            </div>
                                                            <div class="clear"></div>
                                                            <div class="half right">
                                                                <div class="va-wrap">
                                                                    <div class="logo">
                                                                        <a href="match-single.html">
                                                                            <img src="{{ asset('assets/team/'.$battle->byTeam->image) }}"
                                                                                class="img-polaroid"
                                                                                alt="Team Logo"></a>
                                                                    </div>
                                                                    <div class="team-name">
                                                                        {{ $battle->byTeam->name }}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="versus">VS</div>
                                                            <div class="half left">
                                                                <div class="va-wrap">
                                                                    <div class="team-name">
                                                                        {{ $battle->forTeam->name }}
                                                                    </div>
                                                                    <div class="logo">
                                                                        <a href="match-single.html">
                                                                            <img src="{{ asset('assets/team/'.$battle->forTeam->image) }}"
                                                                                class="img-polaroid"
                                                                                alt="Team logo"></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="clear"></div>
                                                            <div class="date">
                                                                <i class="uk-icon-calendar"></i>
                                                                {{ date('d M Y', strtotime($battle->battle_date)) }} |
                                                                {{ date('H:i A', strtotime($battle->battle_time)) }}
                                                            </div>
                                                            <div class="clear"></div>
                                                            <div class="location">
                                                                <i class="uk-icon-map-marker"></i>
                                                                <address>
                                                                    {{ $battle->destination }} <br><br>
                                                                </address>
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
                    </div>
                </section>
            </div>
        </div>

        <div class="uk-container uk-container-center alt">
            <ul class="uk-breadcrumb">
                <li><a href="/">Home</a></li>
                <li><a href="{{ route('matches') }}">Matches</a></li>
                <li class="uk-active"><span>Match Details</span></li>
            </ul>
        </div>

        <div class="uk-container uk-container-center">
            <div id="tm-middle" data-uk-grid-match="" data-uk-grid-margin="">
                <div class="tm-main ">
                    <main id="tm-content" class="tm-content">
                        <div class="contentpaneopen">
                            <article class="match-article ">
                                <div class="clearfix"></div>
                                <div class="uk-grid">
                                    <div class="uk-width-6-10">
                                        <div class="top-text article-single-text">
                                            <div class="big-title">About <span>Match</span></div>
                                            <p>Vivamus hendrerit, tortor sed luctus maximus, nunc urna hendrerit nibh,
                                                sit amet efficitur libero lorem quis mauris. Nunc a pulvinar lectus.
                                                Pellentesque aliquam justo ut rhoncus lobortis. In sed venenatis massa.
                                                Sed sodales faucibus odio, eget tempus nibh accumsan ut. Fusce tincidunt
                                                semper finibus. Nullam consequat non leo interdum pulvinar.</p>
                                        </div>
                                    </div>
                                    <div class="uk-width-medium-4-10">
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

                                                window.map = new google.maps.Map(document.getElementById('map1'), mapOptions);

                                            }

                                            google.maps.event.addDomListener(window, 'load', initialize);
                                        </script>
                                        <div id="map1"></div>
                                    </div>
                                </div>
                                <div class="uk-grid">
                                    <div class="uk-width-1-1">
                                        <div class="middle-text article-single-text">
                                            <p>Suspendisse odio erat, suscipit vel aliquam tristique, dapibus at neque.
                                                Aliquam lectus tellus, feugiat non sodales nec, rhoncus a est. Etiam
                                                hendrerit, eros nec mollis blandit, velit sem aliquet ex, id tristique
                                                metus ligula tincidunt nisi. Ut porta augue at molestie feugiat. Donec
                                                quis neque molestie, interdum sapien at, dictum diam. Nam aliquam diam
                                                vitae purus vestibulum, sit amet rutrum tortor aliquet. Curabitur
                                                rhoncus consectetur tempor. Vivamus volutpat, mauris non auctor
                                                molestie, est ex auctor eros, vel egestas eros tellus non dui.</p>
                                        </div>
                                    </div>
                                    <div class="uk-width-1-1">
                                        <div class="match-gallery">
                                            <div dir="ltr" class="uk-slidenav-position" data-uk-slider="">
                                                <div class="uk-slider-container">
                                                    <div class="big-title">Photo <span>stadium</span></div>
                                                    <div class="match-slider-btn">
                                                        <a draggable="false" href="/"
                                                            class="uk-slidenav uk-slidenav-previous"
                                                            data-uk-slider-item="previous"></a>
                                                        <a draggable="false" href="/"
                                                            class="uk-slidenav uk-slidenav-next"
                                                            data-uk-slider-item="next"></a>
                                                    </div>
                                                    <ul class="uk-slider uk-grid uk-grid-width-1-3">
                                                        <li><img draggable="false" class="uk-responsive-height"
                                                                src="{{ asset('assets/images/cbbe9344c2c9c067b6e5e67a7707f803.jpeg') }}"
                                                                alt=""></li>
                                                        <li><img draggable="false" class="uk-responsive-height"
                                                                src="{{ asset('assets/images/soccer-ball-2121x1414_tiny.jpg') }}"
                                                                alt=""></li>
                                                        <li><img draggable="false" class="uk-responsive-height"
                                                                src="{{ asset('assets/images/cbbe9344c2c9c067b6e5e67a7707f803.jpeg') }}"
                                                                alt=""></li>
                                                        <li><img draggable="false" class="uk-responsive-height"
                                                                src="{{ asset('assets/images/soccer-ball-2121x1414_tiny.jpg') }}"
                                                                alt=""></li>
                                                        <li><img draggable="false" class="uk-responsive-height"
                                                                src="{{ asset('assets/images/cbbe9344c2c9c067b6e5e67a7707f803.jpeg') }}"
                                                                alt=""></li>
                                                        <li><img draggable="false" class="uk-responsive-height"
                                                                src="{{ asset('assets/images/soccer-ball-2121x1414_tiny.jpg') }}"
                                                                alt=""></li>
                                                        <li><img draggable="false" class="uk-responsive-height"
                                                                src="{{ asset('assets/images/cbbe9344c2c9c067b6e5e67a7707f803.jpeg') }}"
                                                                alt=""></li>
                                                        <li><img draggable="false" class="uk-responsive-height"
                                                                src="{{ asset('assets/images/soccer-ball-2121x1414_tiny.jpg') }}"
                                                                alt=""></li>
                                                        <li><img draggable="false" class="uk-responsive-height"
                                                                src="{{ asset('assets/images/cbbe9344c2c9c067b6e5e67a7707f803.jpeg') }}"
                                                                alt=""></li>
                                                        <li><img draggable="false" class="uk-responsive-height"
                                                                src="{{ asset('assets/images/soccer-ball-2121x1414_tiny.jpg') }}"
                                                                alt=""></li>
                                                        <li><img draggable="false" class="uk-responsive-height"
                                                                src="{{ asset('assets/images/cbbe9344c2c9c067b6e5e67a7707f803.jpeg') }}"
                                                                alt=""></li>
                                                        <li><img draggable="false" class="uk-responsive-height"
                                                                src="{{ asset('assets/images/soccer-ball-2121x1414_tiny.jpg') }}"
                                                                alt=""></li>
                                                        <li><img draggable="false" class="uk-responsive-height"
                                                                src="{{ asset('assets/images/cbbe9344c2c9c067b6e5e67a7707f803.jpeg') }}"
                                                                alt=""></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-width-1-1">
                                        <div class="article-single-text">
                                            <blockquote>Ut scelerisque odio et cursus hendrerit. Nullam volutpat ligula
                                                elit, sit amet viverra est consequat non. Suspendisse nisl magna,
                                                suscipit sed volutpat nec, commodo nec nunc. Nunc posuere commodo ipsum,
                                                sit amet pretium felis eleifend vitae. Cras eget aliquam augue.
                                            </blockquote>
                                            <p>Suspendisse odio erat, suscipit vel aliquam tristique, dapibus at neque.
                                                Aliquam lectus tellus, feugiat non sodales nec, rhoncus a est. Etiam
                                                hendrerit, eros nec mollis blandit, velit sem aliquet ex, id tristique
                                                metus ligula tincidunt nisi. Ut porta augue at molestie feugiat. Donec
                                                quis neque molestie, interdum sapien at, dictum diam. Nam aliquam diam
                                                vitae purus vestibulum, sit amet rutrum tortor aliquet. Curabitur
                                                rhoncus consectetur tempor. Vivamus volutpat, mauris non auctor
                                                molestie, est ex auctor eros, vel egestas eros tellus non dui.</p>
                                        </div>
                                    </div>
                     
                                </div>
                            </article>
                        </div>

                    </main>
                </div>

            </div>
        </div>
    </div>
</x-layouts.website>

