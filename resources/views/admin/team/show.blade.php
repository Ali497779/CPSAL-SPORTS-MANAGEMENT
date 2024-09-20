<x-layouts.dashboard title="Team Detail">
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between w-100">
                <h3>Team Detail</h3>
                <a href="{{ route('admin.teams.index') }}" class="btn btn-secondary"><i
                        class="fa fa-arrow-left"></i> Back</a>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <td>
                            {{-- {{dd($team->image) }} --}}
                            {{-- <img src="{{ Storage::url($team->image) }}" class="img-fluid" width="150px" alt=""> --}}
                            <img style="object-fit: cover;" width="200px" src="{{ asset('assets/team/'.$team->image) }}" alt="Coach Avatar">
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
                        <td>{{ $team->coach->school?->name }}</td>
                    </tr>
                    <tr>
                        <th>Players</th>
                        <td>
                            @foreach ($team->players as $player)
                                <div class="badge badge-secondary p-2">{{ $player->name }}</div>
                            @endforeach
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.dashboard>
