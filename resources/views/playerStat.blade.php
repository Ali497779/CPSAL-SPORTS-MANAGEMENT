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
                <li class="uk-active"><span>Players Points</span>
                </li>
            </ul>
        </div>

        <div class="card">
            <div class="card-header">
                <h2 style="text-align: center">All <span style="color: #ffc722">Player</span> Points <span style="color: #ffc722">Table</span></h2>
            </div>
            <div class="card-body">
                <table class="table table-bordered text-center">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
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

</x-layouts.website>
