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
                                        Recent Match Result
                                    </h1>
                                    <div class="clear"></div>
                                    <div class="va-latest-wrap">
                                        <div class="uk-container uk-container-center">
                                            @if (isset($latestMatch[0]))
                                                <div class="va-latest-top">
                                                    <h3>Latest <span>Results</span></h3>
                                                    <div class="tournament">
                                                        <address>
                                                            {{ $latestMatch[0]->SessionTeam->name }}<br><br>
                                                        </address>
                                                    </div>
                                                    <div class="date">
                                                        {{ $latestMatch[0]->battle->battle_date }} |
                                                        {{ $latestMatch[0]->battle->battle_time }}
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="va-latest-middle uk-flex uk-flex-middle">
                                            <div class="uk-container uk-container-center">
                                                <div class="uk-grid uk-flex uk-flex-middle">
                                                    <div class="uk-width-2-12 center">
                                                        <a href="match-single.html">
                                                            
                                                            <img src="{{ asset('assets/team/'.$latestMatch[0]->SessionTeam->team->image) }}"
                                                                class="img-polaroid" alt="Team image"
                                                                title="team images">
                                                        </a>
                                                    </div>
                                                    <div class="uk-width-3-12 name uk-vertical-align">
                                                        <div class="wrap uk-vertical-align-middle">
                                                            {{ $latestMatch[0]->SessionTeam->team->name }}
                                                        </div>
                                                    </div>
                                                    <div class="uk-width-2-12 score">
                                                        <div class="title">score</div>
                                                        <div class="table">
                                                            <div class="left">
                                                                {{ $latestMatch[0]->score }}
                                                            </div>
                                                            <div class="right">
                                                                {{ $latestMatch[1]->score }}
                                                            </div>
                                                            <div class="uk-clearfix"></div>
                                                        </div>
                                                    </div>
                                                    <div class="uk-width-3-12 name alt uk-vertical-align">
                                                        <div class="wrap uk-vertical-align-middle">
                                                            {{ $latestMatch[1]->SessionTeam->team->name }}
                                                        </div>
                                                    </div>
                                                    <div class="uk-width-2-12 center">
                                                        <a href="match-single.html">
                                                            
                                                            <img src="{{ asset('assets/team/'.$latestMatch[1]->SessionTeam->team->image) }}"
                                                                class="img-polaroid" alt="Team image"
                                                                title="team image">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="uk-container uk-container-center">
                                            <div class="va-latest-bottom">
                                                <div class="uk-grid">
                                                    <div class="uk-width-8-12 uk-container-center text">
                                                        <p>Vivamus hendrerit, tortor sed luctus maximus, nunc urna
                                                            hendrerit nibh, sit amet efficitur libero lorem quis mauris.
                                                            Nunc a pulvinar lectus. Pellentesque aliquam justo ut
                                                            rhoncus lobortis. In sed venenatis massa. Sed sodales
                                                            faucibus odio, eget tempus nibh accumsan ut. Fusce tincidunt
                                                            semper finibus. Nullam consequat non leo interdum pulvinar.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="uk-grid">
                                                    <div class="uk-width-1-1">
                                                        <div class="btn-wrap uk-container-center">
                                                            <a class="read-more" href="{{ route('matches') }}">More
                                                                Info</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
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
                <li class="uk-active"><span>Leagues</span></li>
            </ul>
        </div>


        <div class="uk-container uk-container-center" style="text-align: center">
            <h1>Available <span style="color:#ffc722">Teams</span> In Each <span style="color:#ffc722">League</span>
            </h1>
        </div>

        @foreach ($sessions as $session)
            <div class="uk-container uk-container-center">
                <h2>League Name: <span style="color:#ffc722">{{ $session->name }}</span></h2>
            </div>
            <div class="uk-container uk-container-center">
                <div id="tm-middle" class="tm-middle uk-grid" data-uk-grid-match="" data-uk-grid-margin="">
                    <div class="tm-main uk-width-medium-5-5 ">
                        <main id="tm-content" class="tm-content">
                            <div class="match-list-wrap">
                                @foreach ($session->sessionTeams as $sessionteam)
                                        <div class="match-list-item m-3" >
                                       
                                            <div class="logo">
                                                <a href="#">
                                                    
                                                    <img src="{{ asset('assets/team/'.$sessionteam->team->image) }}" class="img-polaroid"
                                                        alt="team image"
                                                        title="team image"></a>
                                            </div>
                                            <div class="team-name">
                                                {{ $sessionteam->team->name }}
                                            </div>
                                        </div>
                                @endforeach
                            </div>
                        </main>
                    </div>
                </div>
            </div>
        @endforeach





        <br>
        <div class="tm-bottom-e-box tm-full-width  ">
            <div class="uk-container uk-container-center">
                <section id="tm-bottom-e" class="tm-bottom-e uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}"
                    data-uk-grid-margin="">
                    <div class="uk-width-1-1 uk-row-first">
                        <div class="uk-panel">
                            <img src="{{ asset('assets/images/C8GfsRBWkAEtwNA.jpeg') }}" alt="">
                        </div>
                    </div>
                </section>
            </div>
        </div>

    </div>

</x-layouts.website>

