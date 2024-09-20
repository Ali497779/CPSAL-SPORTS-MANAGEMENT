<x-layouts.dashboard title="Team Edit">
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between w-100">
                <h3>Edit Team</h3>
                <a href="{{ route('coach.teams.index') }}" class="btn btn-secondary"><i class="fa fa-arrow-left"></i>
                    Back</a>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('coach.teams.update', $team->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="name" class="form-label">Name <sup class="text-danger">*</sup></label>
                    <input type="text" name="name" value="{{ $team->name }}" id="name" class="form-control"
                        placeholder="Enter name">
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image <sup class="text-danger">*</sup></label>
                    <div class="row">
                        <div class="col-md-6">
                            <input type="file" name="image" id="image" class="form-control"
                                value="{{ $team->image }}">
                            @error('image')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <img src="{{ Storage::url($team->image) }}" alt="Team Image" class="img-fluid" style="height: 100px">
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="sport_id" class="form-label">Sport <sup class="text-danger">*</sup></label>
                    <select class="form-control" name="sport_id" id="sport_id" onchange="players(this)">
                        <option value="" selected>Select sport</option>
                        @forelse ($sports as $sport)
                            <option value="{{ $sport->id }}" {{ $sport->id == $team->sport_id ? 'selected' : '' }}
                                data-min-players="{{ $sport->min_players }}"
                                data-max-players="{{ $sport->max_players }}">{{ $sport->name }}</option>
                        @empty
                            <option value="" class="text-danger" disabled>No sport found!</option>
                        @endforelse
                    </select>
                    @error('sport_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <input type="hidden" name="coach_id" value="{{ auth()->id() }}">
                <div class="d-flex justify-content-center">
                    <a href="{{ route('coach.teams.index') }}" class="btn btn-danger text-white mr-3">
                        <i class="fa fa-times"></i>
                        Cancel</a>
                    <button class="btn btn-primary"><i class="fa fa-edit"></i> Update</button>
                </div>
            </form>
        </div
    </div>
</x-layouts.dashboard>
