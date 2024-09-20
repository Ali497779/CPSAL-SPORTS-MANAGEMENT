<x-layouts.dashboard title="session List">
    <div class="card">
        
        <div class="card-header">
            <div class="d-flex justify-content-between w-100">
                <h2>Sessions</h2>
                <a href="{{ route('admin.sessions.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Add
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
                        @forelse ($sessions as $session)
                        <tr>
                            <td scope="row">{{ $loop->iteration }}</td>
                            <td>{{ $session->name }}</td>
                            <td>{{ $session->sport->name }}</td>
                            <td>
                                {{-- @if (!$session->sport->teams->pluck('id')->intersect($session->sessionTeams->pluck('team_id'))->count() > 0) --}}
                                <a href="{{ route('admin.sessions.teams.create',[$session->id,$session->sport->id]) }}"
                                    class="btn btn-primary"><i class="fa fa-plus"></i></a>
                                {{-- @endif --}}
                                <a href="{{ route('admin.sessions.edit',$session->id) }}" title="Edit session"
                                    class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                <a href="{{ route('admin.sessions.show',$session->id) }}" title="session Detail"
                                    class="btn btn-success"><i class="fa fa-eye"></i></a>
                                <form id="form" class="d-inline"
                                    action="{{ route('admin.sessions.destroy',$session->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button id="delete-btn" class="btn btn-danger" title="Delete Session"><i
                                            class="fa fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr class="text-center">
                            <td colspan="7" class="text-danger">No session added yet!</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
                <div>
                    {{ $sessions->links() }}
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
    <x-delete-alert />
    @endpush
</x-layouts.dashboard>