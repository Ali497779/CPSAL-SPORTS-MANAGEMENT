<x-layouts.dashboard title="Battle Detail">
    
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between w-100">
                <h3>Battle Detail</h3>
                <a href="{{ route('admin.battles.index') }}" class="btn btn-secondary"><i class="fa fa-arrow-left"></i>
                    Back</a>
                @if (!$battle->postponed)
                    <form id="form" action="{{ route('admin.battles.postponed', $battle->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <button id="postponed-btn" class="btn btn-danger">Postponed</button>
                    </form>
                @else
                    <a href="{{ route('admin.battles.edit', $battle->id) }}" title="Reshedule battle"
                        class="btn btn-primary"><i class="fa fa-edit"></i> Reschedule</a>
                @endif

            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th>Name</th>
                        <td>{{ $battle->session->sport->name }}</td>
                    </tr>
                    <tr>
                        <th>Team 1</th>
                        <td>{{ $battle->byTeam->name }}</td>
                    </tr>
                    @if (($battle->forTeam) != Null)
                    <tr>
                        <th>Team 2</th>
                        <td>{{ $battle->forTeam->name }}</td>
                    </tr>
                    @endif
                    <tr>
                        <th>Date</th>
                        <td>{{ date('d M Y', strtotime($battle->battle_date)) }}</td>
                    </tr>
                    <tr>
                        <th>Time</th>
                        <td>{{ date('H:i A', strtotime($battle->battle_time)) }}</td>
                    </tr>
                    <tr>
                        <th>Destination</th>
                        <td>{{ $battle->destination }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    @push('scripts')
        <x-postponed-alert />
    @endpush
</x-layouts.dashboard>
