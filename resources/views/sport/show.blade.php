<x-layouts.dashboard title="Sport Detail">
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between w-100">
                <h3>Sport Detail</h3>
                    <a href="{{ route('admin.sports.index') }}" class="btn btn-secondary"><i
                        class="fa fa-arrow-left"></i> Back</a>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th>Name</th>
                            <td>{{ $sport->name }}</td>
                        </tr>
                        <tr>
                            <th>Min Player</th>
                            <td>{{ $sport->min_players }}</td>
                        </tr>
                        <tr>
                            <th>Max Player</th>
                            <td>{{ $sport->max_players }}</td>
                        </tr>
                    </tbody>
            </table>
        </div>
    </div>
</x-layouts.dashboard>
