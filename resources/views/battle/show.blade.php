<x-layouts.dashboard title="Battle Detail">
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between w-100">
                <h3>Battle Detail</h3>
                <a href="{{ route('coach.battles.index') }}" class="btn btn-secondary"><i
                        class="fa fa-arrow-left"></i> Back</a>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th>Sport</th>
                        <td>{{ $battle->byTeam->sport->name }}</td>
                    </tr>
                    <tr>
                        <th>Session</th>
                        <td>{{ $battle->session->name }}</td>
                    </tr>
                    <tr>
                        <th>Teams</th>
                        <td>{{ $battle->byTeam->name }} <span class="text-success">~VS~</span> {{ $battle->forTeam->name }}</td>
                    </tr>
                    <tr>
                        <th>Date Time</th>
                        <td>{{ date('d M Y', strtotime($battle->battle_date)).' '.date('H:i A', strtotime($battle->battle_time)) }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.dashboard>
