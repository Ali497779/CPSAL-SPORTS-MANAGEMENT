<x-layouts.website  title="{{ $seoTitle['value'] }}" seoDec="{{$seoDec['value'] }}" seoAuth="{{$seoAuth['value'] }}" seoKey="{{$seoKey['value'] }}">



    <div class="over-wrap">
        <div class="tm-top-a-box tm-full-width tm-box-bg-1 ">
            <div class="uk-container uk-container-center">
                <section id="tm-top-a" class="tm-top-a uk-grid uk-grid-collapse" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">

                    <div class="uk-width-1-1 uk-row-first">
                        <div class="uk-panel">
                            <div class="uk-cover-background uk-position-relative head-wrap" style="height: 290px; background-image: url('{{asset('assets/images/head-bg.jpg')}}');">
                                <img class="uk-invisible" src="{{asset('assets/images/head-bg.jpg')}}" alt="" height="290" width="1920">
                                <div class="uk-position-cover uk-flex uk-flex-center head-title">
                                    <h1>Players Points</h1>
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
                <li>
                    <a href="{{route('playerStat')}}">Players Points</a>
                </li>
                <li class="uk-active"><span>Player Detials</span>
                </li>
            </ul>
        </div>

        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between w-100">
                    <h2>Player Detail</h2>
                   
                </div>
            </div>
            <div class="card-body">

                {{-- {{dd()}} --}}
                <h3>Player Name: <span style="color: #ffc722">{{$SessionTeamPlayer[0]->player->name}}</span></h3>
                <h3 >Team: <span style="color: #ffc722">{{$SessionTeamPlayer[0]->player->team->name}}</span></h3>

                @foreach ($SessionTeamPlayer as $sessionplayer)

                <table class="table table-bordered">
                    <tbody>
                @endforeach
                                

                        <tr class="bg-dark text-light">
                            <th>League</th>
                            <th>Battle</th>
                            <th>Date/Time</th>
                            <th>Score</th>
                        </tr>
                            @foreach ($sessionplayer->player->playerscore as $playerscore )
                            <tr>
                            <td>{{$playerscore->battle->session->name }}</td>
                            <td>{{($playerscore->battle->byTeam->name) }} VS {{$playerscore->battle->ForTeam->name }}</td>
                            <td>{{ date('d M Y', strtotime($playerscore->battle->battle_date)) }},({{ date('H:i A', strtotime($playerscore->battle_time)) }})</td>
                            <td>{{$playerscore->score }}</td>
                        </tr>
                        
                    </tbody>
                </table>
                @endforeach

            </div>
        </div>
    </div>



</x-layouts.website>