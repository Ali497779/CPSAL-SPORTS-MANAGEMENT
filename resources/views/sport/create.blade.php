<x-layouts.dashboard title="Sport Create">
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between w-100">
                <h3>Add New Sport</h3>
                <a href="{{ route('admin.sports.index') }}" class="btn btn-secondary"><i
                        class="fa fa-arrow-left"></i> Back</a>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.sports.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name <sup class="text-danger">*</sup></label>
                    <input type="text" name="name" id="name" value="{{ old('name') }}" class="form-control" placeholder="Enter name">
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="min_players" class="form-label">Min Players <sup class="text-danger">*</sup></label>
                    <input type="number" name="min_players" id="min_players" value="{{ old('min_players') }}" class="form-control" placeholder="Enter min_players">
                    @error('min_players')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="max_players" class="form-label">Max Players <sup class="text-danger">*</sup></label>
                    <input type="number" name="max_players" id="max_players" value="{{ old('max_players') }}" class="form-control" placeholder="Enter max_players">
                    @error('max_players')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="d-flex justify-content-center">
                    <a href="{{ route('admin.sports.index') }}" class="btn btn-danger mr-3"><i class="fa fa-cancel"></i>Cancel</a>
                    <button class="btn btn-primary"><i class="fa fa-floppy-disk"></i> Save</button>
                </div>
            </form>
        </div>
    </div>
</x-layouts.dashboard>
