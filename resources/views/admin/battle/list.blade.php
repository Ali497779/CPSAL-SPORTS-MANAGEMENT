<x-layouts.dashboard title="Matches List">
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between w-100">
                <h2>Matches</h2>
                <a href="{{ route('admin.battles.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Add
                    New</a>
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
                            <th scope="col">Actions</th>
                            <th scope="col">Status</th>
                            <th scope="col">Result</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($battles as $battle)
                        
                            <tr>
                                <td scope="row">{{ $loop->iteration }}</td>
                                <td>{{ $battle->session->sport->name }}</td>
                                <td>
                                    <img src="{{ asset('assets/team/'.$battle->ByTeam->image) }}" width="50px" alt="">
                                    {{ $battle->byTeam->name }}
                                    @if (($battle->forTeam) != Null)
                                    VS {{ $battle->forTeam->name }}
                                    <img src="{{ asset('assets/team/'.$battle->ForTeam->image) }}" width="50px"
                                        alt=""> 
                                    @else

                                    @endif
                                    
                                </td>
                                
                                <td>
                                    <a href="{{ route('admin.battles.edit', $battle->id) }}" title="Edit battle"
                                        class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                    <a href="{{ route('admin.battles.show', $battle->id) }}" title="battle Detail"
                                        class="btn btn-success"><i class="fa fa-eye"></i></a>
                                    <form id="form" class="d-inline"
                                        action="{{ route('admin.battles.destroy', $battle->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button id="delete-btn" class="btn btn-danger" title="Delete Battle"><i
                                                class="fa fa-trash"></i></button>
                                    </form>
                                </td>

                                @if ($battle->postponed == 0)
                                    @if ($battle->battle_date > now())
                                        <td>
                                            <div class="badge badge-primary p-2">Scheduled</div>
                                        </td>
                                        <td><span title="Match Start: {{ $battle->battle_date }}"
                                                class="btn btn-secondary"><i class="fa fa-clock"></i></span></td>
                                    @elseif($battle->battle_date < now()->format('Y-m-d'))
                                        <td>
                                            <div class="badge badge-success p-2">Completed</div>
                                        </td>
                                        
                                        @if (!$battle->sessionTeamScore)
                                        {{-- {{dd($battle->session->id)}} --}}
                                        <td>
                                            <a href="{{ route('admin.battles.score.create',[$battle->id,$battle->session->id]) }}"
                                                title="Add Score" class="btn btn-secondary"><i
                                                    class="fa fa-plus"></i></a>
                                        </td>
                                        @else
                                        <td>
                                            <a href="{{ route('admin.battles.score.show', $battle->id) }}"
                                                title="View Score" class="btn btn-secondary"><i
                                                    class="fa fa-eye"></i></a>
                                        </td>
                                        @endif
                                            
                                        
                                        </td>
                                    @elseif($battle->battle_date == now()->format('Y-m-d'))
                                        <td>
                                            <div class="badge badge-warning p-2">Process</div>
                                        <td><span title="Match In Progres" class="btn btn-secondary"><i
                                                    class="fa fa-clock"></i></span></td>
                                        </td>
                                    @else
                                        <td>
                                            <div class="badge badge-secondary p-2">Not Confirmed</div>
                                        </td>
                                    @endif
                                @else
                                    <td>
                                        <div class="badge badge-danger p-2">Postponed</div>
                                    </td>
                                @endif

                            </tr>
                        @empty
                            <tr class="text-center">
                                <td colspan="7" class="text-danger">No match added yet!</td>
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
    @push('scripts')
        <x-delete-alert />
    @endpush
</x-layouts.dashboard>
