<x-layouts.dashboard title="Session List">
    <div class="card">
        <div class="card-header">
            <h3>Sessions</h3>
        </div>
        
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-center">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Sport</th>
                            <th scope="col">My Team</th>
                            <th scope="col">Players</th>
                        </tr>
                    </thead>
                    <tbody>
                       
                        @forelse ($sessionTeams as $sessionTeam)

                        <tr>
                            <td scope="row">{{ $loop->iteration }}</td>
                            <td>{{ $sessionTeam->session->name }}</td>
                            <td>{{ $sessionTeam->session->sport->name }}</td>
                            <td>{{ $sessionTeam->team->name }}</td>
                            <td>
                                @if ($sessionTeam->sessionTeamPlayers->isEmpty())
                                <a href="{{ route('coach.sessions.add-players', [$sessionTeam->team_id,$sessionTeam->session->sport_id,$sessionTeam->session->id]) }}"
                                    title="Add players" class="btn btn-primary"><i class="fa fa-plus"></i>
                                </a>
                                @else
                                <a href="{{ route('coach.sessions.show-players', $sessionTeam->team_id) }}"
                                    title="Watch players" class="btn btn-success"><i class="fa fa-eye"></i>
                                </a>
                                @endif
                            </td>
                        </tr>
                        @empty
                        <tr class="text-center">
                            <td colspan="5" class="text-danger">Your team isn't participating in any session yet!</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
                <div>
                    {{ $sessionTeams->links() }}
                </div>
            </div>
        </div>
    </div>
</x-layouts.dashboard>