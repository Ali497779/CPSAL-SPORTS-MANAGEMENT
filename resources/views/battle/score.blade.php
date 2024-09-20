<x-layouts.dashboard title="Battle Detail">
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between w-100">
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                @foreach ($sessionTeamScores as $sessionTeamScore)
                    @if ($sessionTeamScore->is_win == 1)
                        <thead class="table-success text-center">
                            <th>WIN</th>
                            <th>Team Name</th>
                            <th>Team Score</th>
                            <th>SQUAD</th>


                        </thead>
                        @elseif($sessionTeamScore->points == 1.00){
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
                                    src="{{ asset('assets/team/'.$sessionTeamScore->SessionTeam->team->image) }}" width="200px"
                                    alt=""></td>
                            <td style="text-align: center;">{{ $sessionTeamScore->SessionTeam->team->name }}</td>
                            <td style="text-align: center;">{{ $sessionTeamScore->score }}</td>
                            
                            <td>
                                @foreach ($playerScore as $playerscore)
                                    {{ $playerscore->player->name }}
                                    ({{ ($playerscore->score) }})<br>
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                        </tr>
                        @endforeach
                        <tr>
                        <th>Date</th>
                        <td>{{ date('d-M-Y',strtotime($sessionTeamScore->battle->battle_date)) }}</td>
                    </tr>
                    <tr>
                        <th>Time</th>
                        <td>{{ date('h:i A',strtotime($sessionTeamScore->battle->battle_time)) }}</td>
                    </tr>
                    <tr>
                        <th>Destination</th>
                        <td>{{ $sessionTeamScore->battle->destination }}</td>
                    </tr>
                
                
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.dashboard>
