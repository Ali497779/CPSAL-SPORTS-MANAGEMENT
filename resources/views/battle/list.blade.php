<x-layouts.dashboard title="battle List">
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between w-100">
                <h2>Battles</h2>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-center">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Sport</th>
                            <th scope="col">Events</th>
                            <th scope="col">Date Time</th>
                            <th scope="col">Destination</th>
                            <th scope="col">Status</th>
                            <th scope="col">Actions</th>

                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($battles as $battle)
                            <tr>
                                <td scope="row">{{ $loop->iteration }}</td>
                                <td>{{ $battle->byTeam->sport->name }}</td>
                                <td><img src="{{ asset('assets/team/'.$battle->byTeam->image) }}" width="50px"
                                        alt="">{{ $battle->byTeam->name }}
                                        @if ($battle->forTeam != null)
                                             ~VS~
                                    {{ $battle->forTeam->name }}<img  src="{{ asset('assets/team/'.$battle->forTeam->image) }}"
                                        width="50px" alt="">
                                        @endif
                                   
                                </td>
                                <td>{{ date('d M Y', strtotime($battle->battle_date)) . ' ' . date('H:m A', strtotime($battle->battle_time)) }}
                                </td>
                                <td>{{ $battle->destination }}</td>
                                @if ($battle->postponed == 0)
                                    @if ($battle->battle_date > now())
                                        <td>
                                            <div class="badge badge-primary p-2">Scheduled</div>
                                        </td>
                                    @elseif($battle->battle_date == now()->format('Y-m-d'))
                                    <td><span class="badge p-2 btn-warning">WAIT</span></td>
                                        <td><span title="Wait For Result" class="btn btn-secondary"><i
                                                    class="fa fa-clock"></i></span></td>
                                    @elseif($battle->battle_date < now())
                                        <td><span class="badge p-2 btn-success">Completed</span></td>
                                        @if (!$battle->sessionTeamScore)
                                        <td><a  title="Wait For Result"
                                            class="btn btn-secondary text-light"><i class="fa fa-clock"></i></a></td>
                                        @else
                                        <td><a href="{{ route('coach.battle.viewscore', $battle->id) }}" title="View Result"
                                            class="btn btn-secondary"><i class="fa fa-eye"></i></a></td>
                                        @endif
                                        
                                    @else
                                        <td><span class="badge p-2 btn-primary">Wait</span></td>
                                    @endif
                                @else
                                    <td>
                                        <div class="badge badge-danger p-2">Postponed</div>
                                    </td>
                                    <td></td>
                                @endif

                            </tr>

                        @empty
                            <tr class="text-center">
                                <td colspan="7" class="text-danger">No battle added yet!</td>
                            </tr>

                        @endforelse

                    </tbody>
                </table>
                <div>
                    {{ $battles->links() }}
                </div>
            </div>
        </div>
    </div>
</x-layouts.dashboard>
