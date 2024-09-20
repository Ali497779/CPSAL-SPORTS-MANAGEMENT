<x-layouts.dashboard title="Battle Detail">
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-right w-100">
                <a href="{{ route('admin.battles.index') }}" class="btn btn-secondary"><i class="fa fa-arrow-left"></i> Back</a>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                {{-- {{dd($battles)}} --}}
                {{-- @foreach ($battles as $playerscore)
                        {{dd($playerscore)}}
                    @endforeach --}}
                @foreach ($sessionTeamScores as $sessionTeamScore)
                    {{-- {{dd($sessionTeamScore) }} --}}
                    @if ($sessionTeamScore->is_win == 1)
                        <thead class="table-success text-center">
                            <th>WIN</th>
                            <th>Team Name</th>
                            <th>Team Score</th>
                            <th>SQUAD</th>


                        </thead>
                    @elseif($sessionTeamScore->points == 1.0)
                        {
                        <thead class="table-warning text-center">
                            <th>DRAW</th>
                            <th>Team Name</th>
                            <th>Team Score</th>
                            <th>SQUAD</th>
                        </thead>
                        }
                    @else
                        <thead class="table-danger text-center">
                            <th>LOSE</th>
                            <th>Team Name</th>
                            <th>Team Score</th>
                            <th>SQUAD</th>
                        </thead>
                    @endif

                    <tbody>

                        <tr>
                            <td class="text-center"><img
                                    src="{{ asset('assets/team/'.$sessionTeamScore->SessionTeam->team->image) }}" width="250px"
                                    alt=""></td>
                            <td style="text-align: center;">{{ $sessionTeamScore->SessionTeam->team->name }}</td>
                            <td style="text-align: center;">{{ $sessionTeamScore->score }}</td>

                            <td>
                                {{-- @foreach ($sessionTeamScore->SessionTeam->playerScores as $playerScore)
                                        {{ $playerScore->player->name }}
                                        ({{ ($playerScore->score) }})<br>
                                    @endforeach --}}
                                    
                                @foreach ($playerScores as $playerScore)
                                    @if ($playerScore->team_id == $sessionTeamScore->SessionTeam->team_id)
                                    <a href="{{ route('admin.player.index', $playerScore->player->id) }}">
                                        {{ $playerScore->player->name }}
                                        ({{ $playerScore->score }})</a>
                                        <br>
                                    @endif
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                        </tr>
                @endforeach
                <tr class="text-center">
                    <th>Date</th>
                    <th>Time</th>
                    <th>Destination</th>
                </tr>
                {{-- {{dd($sessionTeamScore->battle) }} --}}
                <tr class="text-center">
                    <td>{{ date('d-M-Y', strtotime($sessionTeamScore->battle->battle_date)) }}</td>
                    <td>{{ date('h:i A', strtotime($sessionTeamScore->battle->battle_time)) }}</td>
                    <td>{{ $sessionTeamScore->battle->destination }}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

</x-layouts.dashboard>
