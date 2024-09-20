{{-- {{dd($SessionTeamPlayer) }} --}}
<x-layouts.dashboard title="Coach Detail">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between w-100">
                    <h3>Player Detail</h3>
                    <a href="{{ route('admin.battles.index') }}" class="btn btn-secondary"><i class="fa fa-arrow-left"></i>
                        Back</a>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            {{-- {{dd($SessionTeamPlayer) }} --}}
                            
                            <th>Player</th>
                            <td>
                                @foreach ($SessionTeamPlayer as $sessionplayer)
                                {{$sessionplayer->player->name}}
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <th>Team</th>
                            <td>{{ $sessionplayer->player->team->name }}</td>
                        </tr>
                        @if ($sessionplayer->player->sportAttributeValues != null)
                        @foreach ($sessionplayer->player->sportAttributeValues as $sportattribute)
                            
                        
                        <tr>
                            <th>{{$sportattribute->sportAttribute->name}}</th>
                            <td>{{ $sportattribute->value }}</td>
                        </tr>
                        @endforeach 
                        @endif

                        <tr class="bg-dark text-light">
                            <th>League</th>
                            <th>Battle</th>
                            <th>Date/Time</th>
                            <th>Score</th>
                        </tr>
                            @foreach ($sessionplayer->player->playerscore as $playerscore )
                            <tr>
                            <td>{{$playerscore->battle->session->name }}</td>
                            <td>{{($playerscore->battle->byTeam->name) }}
                                @if ($playerscore->battle->ForTeam != null)
                                     VS {{$playerscore->battle->ForTeam->name }}
                                @endif
                               </td>
                            <td>{{ date('d M Y', strtotime($playerscore->battle->battle_date)) }},({{ date('H:i A', strtotime($playerscore->battle_time)) }})</td>
                            <td>{{$playerscore->score }}</td>
                        </tr>
                            @endforeach
                        
                    </tbody>
                </table>
            </div>
        </div>
    </x-layouts.dashboard>
    