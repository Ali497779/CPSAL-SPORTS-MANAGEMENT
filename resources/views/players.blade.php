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
                <li><a href="/">Home</a>
                </li>
                <li class="uk-active"><span>Players</span>
                </li>
            </ul>
        </div>
        

        <div class="uk-container uk-container-center">
            <div id="tm-middle" class="tm-middle uk-grid" data-uk-grid-match="" data-uk-grid-margin="">
                <div class="tm-main uk-width-medium-1-1 uk-row-first">
                    <main id="tm-content" class="tm-content">

                        <div class="uk-container uk-container-center tt-gallery-top">
                            <div class="uk-grid" data-uk-grid-match="">
                                @if ($Heading)
                                <div class="uk-width-medium-3-10 uk-width-small-1-1 title">{{($Heading->value != null)?$Heading->value:''}}</div>
                                @endif
                                @if ($Paragraph)
                                <div class="uk-width-medium-7-10 uk-width-small-1-1 text">{{($Paragraph->value != null)?$Paragraph->value:''}}</div>
                                @endif
                            </div>
                        </div>

                        <div class="list-players-wrapper">
                            <div class="uk-sticky-placeholder">
                                <div class="button-group filter-button-group" data-uk-sticky="{top:70, boundary: true}">
                                    <div class="uk-container uk-container-center">
                                        <div class="label-menu">OUR Top players</div>
                                    </div>
                                </div>
                            </div>
                            <div class="list-players-wrap" id="boundary">
                                <div class="left-player">
                                    <img src="images/left-player-bg.png" alt="">
                                </div>
                                <div class="right-player">
                                    <img src="images/right-player-bg.png" alt="">
                                </div>

                                {{-- <div class="uk-container uk-container-center alt">
                                    <div class="uk-grid grid1 players-list">

           

                            
                                    </div>
                                </div> --}}

                                <div class="card">
                                    <div class="card-header">
                                        <h2 style="text-align: center">Our <span style="color: #ffc722">Top</span> Eight <span style="color: #ffc722">Players</span></h2>
                                    </div>
                                    <div class="card-body">
                                        <table class="table table-bordered text-center">
                                            <thead class="table-dark">
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Player Name</th>
                                                    <th scope="col">Team</th>
                                                    <th scope="col">Sport</th>
                                                     <th scope="col">Score</th>
                                                   <th scope="col">Match Played</th>
                                                    <th scope="col">Win</th>
                                                    <th scope="col">Loss</th>
                                                </tr>
                                            </thead>
                                            <tbody class="text-white bg-dark">
                                                @forelse (($sessionTeamPlayers) as $player)
                                                    <tr>
                                                    {{-- {{dd($win)}} --}}
                            
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td><a style="color: azure;" href="{{ route('singlePlayerStat', $player->player->id) }}">{{ $player->player->name }}</a></td>
                                                        <td>{{ $player->player->team->name }}</td>
                                                        <td>{{$player->player->team->sport->name}}
                                                        </td>
                                                        <td>{{$player->totalscore}}</td>
                                                        @foreach ($matchplayed as $playmatch)
                                                        @if ($player->player->id == $playmatch->player_id)
                                                           <td>{{$playmatch->totalmatch}}</td> 
                                                           @foreach($win as $wins)
                                                           @if($wins->player_id == $playmatch->player_id)
                                                           <td>{{ $wins->win_count }}</td>
                                                            <td>{{ $playmatch->totalmatch - $wins->win_count }}</td>
                                                           @endif
                                                           @endforeach
                                                        @endif     
                                                        @endforeach
                                 
                                                    </tr>
                                                    @empty
                                                    <tr class="text-center">
                                                        <td colspan="8" class="text-danger">No score added yet!</td>
                                                    </tr>
                                                @endforelse
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

           
                    </main>
                </div>
            </div>
        </div>



     </div>


</x-layouts.website>