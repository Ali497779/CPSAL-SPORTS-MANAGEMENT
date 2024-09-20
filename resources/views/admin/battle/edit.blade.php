<x-layouts.dashboard title="Match edit">
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between w-100">
                <h3>Edit Match</h3>
                <a href="{{ route('admin.battles.index') }}" class="btn btn-secondary"><i class="fa fa-arrow-left"></i>
                    Back</a>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.battles.update',$battle->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="session_id" class="form-label">Session <sup class="text-danger">*</sup></label>
                    <select class="form-control" name="session_id" id="session_id" onchange="team(this)">
                        <option value="" selected>Select session</option>
                        @forelse ($sessions as $session)
                            <option value="{{ $session->id }}" data-sport-id="{{ $session->sport_id }}"{{ $battle->session_id == $session->id ? 'selected' : '' }}>{{ $session->name }}</option>
                        @empty
                            <option value="" class="text-danger" disabled>No session found!</option>
                        @endforelse
                    </select>
                    @error('session_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="by_team_id" class="form-label">Team 1<sup class="text-danger">*</sup></label>
                            <select class="form-control" name="by_team_id" id="by_team_id">
                                <option value="">Select session first</option>
                                <option value="{{ $battle->by_team_id }}" selected>{{ $battle->by_team_id }}</option>
                            </select>
                            @error('by_team_id')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="for_team_id" class="form-label">Team 2<sup class="text-danger">*</sup></label>
                            <select class="form-control" name="for_team_id" id="for_team_id">
                                <option value="" selected>Select session first</option>
                                <option value="{{ $battle->for_team_id }}" selected>{{ $battle->for_team_id }}</option>
                            </select>
                            @error('for_team_id')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="battle_date" class="form-label">Match Date<sup class="text-danger">*</sup></label>
                            <input type="date" class="form-control" name="battle_date" min="{{ date('Y-m-d') }}" value="{{ $battle->battle_date }}" id="battle_date">
                            @error('battle_date')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="battle_time" class="form-label">Match Time<sup class="text-danger">*</sup></label>
                            <input type="time" class="form-control" name="battle_time" value="{{ $battle->battle_time }}" id="battle_time">
                            @error('battle_time')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="destination" class="form-label">Destination<sup class="text-danger">*</sup></label>
                    <input type="text" class="form-control" name="destination" value="{{ $battle->destination }}" id="destination" placeholder="Enter match destination">
                    @error('destination')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="d-flex justify-content-center">
                    <a href="{{ route('admin.battles.index') }}" class="btn btn-danger mr-3"><i
                            class="fa fa-cancel"></i>Cancel</a>
                    <button class="btn btn-primary"><i class="fa fa-edit"></i> Update</button>
                </div>
            </form>
        </div>
    </div>
    @push('scripts')
        <script src="{{ asset('dashboard/js/team.js') }}"></script>
    @endpush
</x-layouts.dashboard>
