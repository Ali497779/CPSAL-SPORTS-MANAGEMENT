<x-layouts.dashboard title="Sport edit">
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between w-100">
                <h3>Edit Sport</h3>
                <a href="{{ route('admin.sports.index') }}" class="btn btn-secondary"><i
                        class="fa fa-arrow-left"></i> Back</a>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.sports.update',$sport->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="name" class="form-label">Name <sup class="text-danger">*</sup></label>
                    <input type="text" name="name" id="name" value="{{ $sport->name }}" class="form-control" placeholder="Enter sport name">
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="min_players" class="form-label">Min Players <sup class="text-danger">*</sup></label>
                    <input type="number" name="min_players" id="min_players" value="{{ $sport->min_players }}" class="form-control" placeholder="Enter min players">
                    @error('min_players')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="max_players" class="form-label">Max Players <sup class="text-danger">*</sup></label>
                    <input type="number" name="max_players" id="max_players" value="{{ $sport->max_players }}" class="form-control" placeholder="Enter max players">
                    @error('max_players')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="d-flex justify-content-center">
                    <a href="{{ route('admin.sports.index') }}" class="btn btn-danger mr-3"><i class="fa fa-cancel"></i>Cancel</a>
                    <button class="btn btn-primary"><i class="fa fa-edit"></i> Update</button>
                </div>
            </form>
        </div>
    </div>
</x-layouts.dashboard>
