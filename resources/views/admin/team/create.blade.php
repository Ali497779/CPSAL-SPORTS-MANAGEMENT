<x-layouts.dashboard title="Team Create">
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between w-100">
                <h3>Add New Team</h3>
                <a href="{{ route('admin.teams.index') }}" class="btn btn-secondary"><i class="fa fa-arrow-left"></i>
                    Back</a>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.teams.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name <sup class="text-danger">*</sup></label>
                    <input type="text" name="name" id="name" value="{{ old('name') }}" class="form-control" placeholder="Enter name">
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image <sup class="text-danger">*</sup></label>
                    <input type="file" name="image" id="image" class="form-control">
                    @error('image')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="sport_id" class="form-label">Sport <sup class="text-danger">*</sup></label>
                    <select class="form-control" name="sport_id" id="sport_id" onchange="players(this)">
                        <option value="" selected>Select sport</option>
                        @forelse ($sports as $sport)
                            <option value="{{ $sport->id }}">{{ $sport->name }}</option>
                        @empty
                            <option value="" class="text-danger" disabled>No sport found!</option>
                        @endforelse
                    </select>
                    @error('sport_id')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="coach_id" class="form-label">Coach <sup class="text-danger">*</sup></label>
                    <select class="form-control" name="coach_id" id="coach_id">
                        <option value="" selected>Select sport first</option>
                    </select>
                    @error('coach_id')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="row" id="player-fields-container">
                </div>
                <div class="d-flex justify-content-center">
                    <a href="{{ route('admin.teams.index') }}" class="btn btn-danger text-white mr-3"><i
                            class="fa fa-times"></i> Cancel</a>
                    <button class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
                </div>
            </form>
        </div>
    </div>
    @push('scripts')
        <script src="{{ asset('dashboard/js/team-players.js') }}"></script>
    @endpush
</x-layouts.dashboard>
