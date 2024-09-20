<x-layouts.dashboard title="session List">
    <div class="card">
        <div class="card-header">
            {{-- {{dd($sessionTeamPlayers) }} --}}
            <h2>Teams Point</h2>
        </div>
        <div class="card-body">
            <table class="table table-bordered text-center">
                <thead class="table-light">
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
                <tbody class="table-dark">
                    @forelse ($sessions as $session)
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
                        @empty
                        <tr class="text-center">
                            <td colspan="7" class="text-danger">No score added yet!</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    
    <div class="card">
        <div class="card-header">
            <h2>Top 5 Players</h2>
        </div>
        <div class="card-body">
            <table class="table table-bordered text-center">
                <thead class="table-light">
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
                <tbody class="table-dark">
                    @forelse (($sessionTeamPlayers) as $player)
                        <tr>
                        {{-- {{dd($player)}} --}}

                            <td>{{ $loop->iteration }}</td>
                            <td><a style="color: azure;" href="{{ route('admin.player.index', $player->player->id) }}">{{ $player->player->name }}</a></td>
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
                            <td colspan="7" class="text-danger">No score added yet!</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.dashboard>
