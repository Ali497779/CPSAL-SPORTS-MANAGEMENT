<x-layouts.dashboard title="Add Match Players">
    {{-- {{dd($sessionTeam) }} --}}
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between w-100">
                <h3>Session Team players</h3>
                <a href="{{ route('coach.sessions.index') }}" class="btn btn-secondary"><i class="fa fa-arrow-left"></i>
                    Back</a>
                    @if (($sessionTeam->team->sport->min_players) > Count($sessionTeam->sessionTeamPlayers) )
                    <a href="{{ route('coach.sessions.addnew',[$sessionTeam->id,$sessionTeam->team->sport->id,$sessionTeam->session_id]) }}" title="Add Another Player" class="btn btn-primary"><i class="fa fa-plus"></i>
                        Add</a>
                    @endif
                    
                    
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th>Session</th>
                            <td>{{ $sessionTeam->session->name }}</td>
                        </tr>
                        <tr>
                            <th>Team</th>
                            <td>{{ $sessionTeam->team->name }}</td>
                        </tr>
                    </tbody>
                   
                    <tbody>
                        <th>Players</th>
                        <th>Avatar</th>
                        <th>Actions</th>
                           
                                
                                @foreach ($sessionTeam->sessionTeamPlayers as $sessionTeamPlayer)
                                <tr>
                                    <td>{{ $sessionTeamPlayer->player->name }}</td>
                                    @if (isset($sessionTeamPlayer->player->image))
                    
                                    <td>
                                        <img style="object-fit: cover;" width="150px" src="{{ asset('assets/player/'.$sessionTeamPlayer->player->image) }}" alt="Player Avatar">
                                    </td>
                                
                                    @endif
                                    <td class="text-white">
                                        
                                        <a href="{{route('coach.sessions.delete-player',$sessionTeamPlayer->id) }}" title="Remove Player"
                                                class="btn btn-danger"><i class="fa fa-trash"></i>
                                        </a>
                                       
                                    </td>
                                </tr> 
                                @endforeach
                              
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-layouts.dashboard>