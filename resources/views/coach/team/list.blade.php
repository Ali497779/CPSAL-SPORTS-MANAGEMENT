<x-layouts.dashboard title="Team List">
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between w-100">
                <h2>Teams</h2>
                <a href="{{ route('coach.teams.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Add
                    New</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-center">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Sport</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        @forelse ($teams as $team)
                            <tr>
                                <td scope="row">{{ $loop->iteration }}</td>
                                <td>{{ $team->name }}</td>
                                <td>{{ $team->sport->name }}</td>
                                <td>
                                    @if ($team->players->isEmpty())
                                        <a href="{{ route('coach.teams.players.create', $team->id) }}" title="Add Team Players"
                                            class="btn btn-success"><i class="fa fa-plus"></i></a>
                                    @else
                                    <a href="{{ route('coach.teams.players.show', $team->id) }}"
                                        class="btn btn-primary"><i class="fa fa-users"></i></a>
                                    @endif
                                    <a href="{{ route('coach.teams.edit', $team->id) }}" title="Edit Team"
                                        class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                    <a href="{{ route('coach.teams.show', $team->id) }}" title="Team Detail"
                                        class="btn btn-success"><i class="fa fa-eye"></i></a>
                                    <form id="form" class="d-inline"
                                        action="{{ route('coach.teams.destroy', $team->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button id="delete-btn" class="btn btn-danger" title="Delete Team"><i
                                                class="fa fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr class="text-center">
                                <td colspan="7" class="text-danger">No team added yet!</span>
            </div>
            @endforelse
            <div>
                {{ $teams->links() }}
            </div>
            </tbody>
            </table>
        </div>
    </div>
    </div>
    @push('scripts')
        <x-delete-alert />
    @endpush
</x-layouts.dashboard>
