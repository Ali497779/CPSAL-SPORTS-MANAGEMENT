<x-layouts.dashboard title="Session Detail">
    
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between w-100">
                <h3>Session Detail</h3>
                <a href="{{ route('admin.sessions.index') }}" class="btn btn-secondary"><i class="fa fa-arrow-left"></i>
                    Back</a>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th>Name</th>
                        <td>{{ $session->name }}</td>
                    </tr>
                    <tr>
                        <th>Sports</th>
                        <td>{{ $session->sport->name }}</td>
                    </tr>
                    <tr>
                        <th>Teams</th>
                        <td>
                            @if (!($sessions))
                            <span></span>
                            @else
                            @foreach ($sessions as $teams)
                            <span class="badge badge-primary">{{ $teams->team->name }}</span>
                         @endforeach
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.dashboard>
