<x-layouts.dashboard title="Battle Detail">
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between w-100">
                <h3>{{ $battle->session->name }} Match No.
                    {{ $battle->score->battle_id }}
                </h3>



            </div>
        </div>

        <div class="card-body">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <td class="text-center"><img src="{{ asset('assets/team/'.$battle->forTeam->image) }}" width="250px"
                                alt=""></td>
                        <td class="text-center"><img src="{{ asset('assets/team/'.$battle->byTeam->image) }}" width="250px"
                                alt=""></td>
                    </tr>
                    <tr>

                        @if ($battle->score->for_team_score > $battle->score->by_team_score)
                            <th class="btn-success ">{{ $battle->forTeam->name }}</th>
                            <th class="btn-danger ">{{ $battle->byTeam->name }}</th>
                        @elseif($battle->score->for_team_score < $battle->score->by_team_score)
                            <th class="btn-danger ">{{ $battle->forTeam->name }}</th>
                            <th class="btn-success ">{{ $battle->byTeam->name }}</th>
                        @elseif($battle->score->for_team_score == $battle->score->by_team_score)
                            <th class="btn-warning ">{{ $battle->forTeam->name }}</th>
                            <th class="btn-warning ">{{ $battle->byTeam->name }}</th>
                        @endif
                    </tr>
                    <tr>
                        <td>{{ $battle->forTeam->player }}</td>
                        <td>{{ $battle->byTeam->player }}</td>
                    </tr>
                    <tr>
                        {{-- <th></th> --}}
                        <th>SCORES</th>
                    </tr>
                    <tr>
                        {{-- <th>SCORES</th> --}}
                        <td>{{ $battle->score->for_team_score }}</td>
                        <td>{{ $battle->score->by_team_score }}</td>

                    </tr>
                    <tr>                    
                        <th>{{ $battle->forTeam->name }} Squad</th>
                        <th>{{ $battle->ByTeam->name }} Squad</th>
                    </tr>
                    <tr>
                        <td>
                            @foreach ($playerScore as $player)
                            @if ($player->team_id == $battle->for_team_id)
                            
                                {{ $player->player->name }} :{{ $player->score }}  <br>
                            @endif
                        @endforeach
                        </td>
                        <td>
                            @foreach ($playerScore as $player)
                            @if ($player->team_id == $battle->by_team_id)
                                {{ $player->player->name }} : {{ $player->score }}  <br>
                            @endif
                        @endforeach
                        </td>
                    </tr>

                    <tr>
                        <th>Date</th>
                        <td>{{ $battle->battle_date }}</td>
                    </tr>
                    <tr>
                        <th>Time</th>
                        <td>{{ $battle->battle_time }}</td>
                    </tr>
                    <tr>
                        <th>Destination</th>
                        <td>{{ $battle->destination }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    @push('scripts')
        <x-postponed-alert />
    @endpush
</x-layouts.dashboard>
