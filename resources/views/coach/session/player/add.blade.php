<x-layouts.dashboard title="Add Session Players">
   
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between w-100">
                <h3>Add match players</h3>
                {{-- <h5>({{$team->sess }})</h5> --}}
                <a href="{{ route('coach.sessions.index') }}" class="btn btn-secondary"><i class="fa fa-arrow-left"></i>
                    Back</a>
            </div>
        </div>
        {{-- {{dd($sessionteams) }} --}}
        
        @foreach ($sessionteams as $sessionteam)
            {{-- {{dd($totalplayers->session_team_players_count) }}  --}}
        
        <div class="card-body">
            <form action="{{ route('coach.sessions.store-players',[$sessionteam->id]) }}"
                method="post">
                @csrf
                <div class="mb-3">
                    <h1 class="form-label">Session ({{ $sessionteam->session->name }}) </h1>
                    <h3>Team ({{ $sessionteam->team->name }})</h3>
                    <div id="player-selection" class="mt-5">
                        @foreach ($sessionteam->team->players as $player)
                        <div class="mb-3">
                            @if (isset($player->image))
                    
                            <td>
                                <img style="object-fit: cover;" width="150px" src="{{ asset('assets/player/'.$player->image) }}" alt="Player Avatar">
                            </td>
                        
                            @endif
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" id="player" class="form-check-input" name="player_ids[]"
                                        value="{{ $player->id }}">
                                    {{ $player->name }}
                                </label>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <button class="btn-primary">Add Team</button>
                </div>
            </form>
            
            <input type="hidden" name="min_players" value="{{$sessionteam->team->sport->min_players}}">
        </div>
    </div>
    @endforeach
    @push('scripts')
    @if (!(isset($totalplayers)))
    <script>
        $(document).ready(function() {
            const minPlayers = "{{ ($sessionteam->team->sport->min_players) }}";
            $('input[id="player"]').on('change', function() {
                const selectedPlayers = $('input[name="player_ids[]"]:checked');

                if (selectedPlayers.length > minPlayers) {
                    $(this).prop('checked', false);
                }
            });
        });
    </script>
    
    @else
    <script>
        $(document).ready(function() {
            const minPlayers = "{{ ($sessionteam->team->sport->min_players)-($totalplayers->session_team_players_count) }}";
            $('input[id="player"]').on('change', function() {
                const selectedPlayers = $('input[name="player_ids[]"]:checked');

                if (selectedPlayers.length > minPlayers) {
                    $(this).prop('checked', false);
                }
            });
        });
    </script>
    @endif
    
    @endpush
</x-layouts.dashboard>