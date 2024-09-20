<x-layouts.dashboard title="Team Create">
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between w-100">
                <h3>Add Teams</h3>
                <a href="{{ route('admin.sessions.index') }}" class="btn btn-secondary"><i class="fa fa-arrow-left"></i> Back</a>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.sessions.teams.store',request()->sessionId) }}" method="post">
                @csrf
                @forelse ($teams as $team)
                <div class="mb-3">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" name="team_id[]" value="{{ $team->id }}">
                            <img src="{{ asset('assets/team/'.$team->image) }}" width="250px" alt="">
                            {{ $team->name }}
                        </label>
                    </div>
                </div>
                @empty
                <div class="text-center text-danger">
                    No team found for this sport!
                </div>
                @endforelse
                @if ($teams->isNotEmpty())
                    <div class="d-flex justify-content-center">
                        <button class="btn btn-primary">Save</button>
                    </div>
                @endif
            </form>
        </div>
    </div>
</x-layouts.dashboard>