<x-layouts.dashboard title="Team Detail">
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between w-100">
                <h3>Team Detail</h3>
                <a href="{{ route('coach.teams.index') }}" class="btn btn-secondary"><i
                        class="fa fa-arrow-left"></i> Back</a>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th>Image</th>
                        <td>
                            <img src="{{ asset('assets/team/'.$team->image) }}" width="150px" alt="Team image">
                        </td>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <td>{{ $team->name }}</td>
                    </tr>
                    <tr>
                        <th>Sport</th>
                        <td>{{ $team->sport->name }}</td>
                    </tr>
                    <tr>
                        <th>Coach</th>
                        <td>{{ $team->coach->username }}</td>
                    </tr>
                    <tr>
                        <th>School</th>
                        <td>{{ $team->coach->school->name }}</td>
                    </tr>
                    <tr>
                        <th>Players</th>
                        <td>
                            @foreach ($team->players as $player)
                                <div class="badge badge-secondary p-2 my-2">{{ $player->name }}</div>
                            @endforeach
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.dashboard>
