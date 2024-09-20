<x-layouts.dashboard title="Sport Create">
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between w-100">
                <h3>Add New Session</h3>
                <a href="{{ route('admin.sessions.index') }}" class="btn btn-secondary"><i class="fa fa-arrow-left"></i>
                    Back</a>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.sessions.store') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name <sup class="text-danger">*</sup></label>
                    <input type="text" name="name" id="name" value="{{ old('name') }}" class="form-control"
                        placeholder="Enter name">
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="sport_id" class="form-label">Sport <sup class="text-danger">*</sup></label>
                    <select class="form-control" name="sport_id" id="sport_id">
                        <option value="" selected>Select Sport</option>
                        @foreach ($sports as $sport)
                            <option value="{{ $sport->id }}" {{ old('sport_id') == $sport->id ? 'selected' : '' }}>{{ $sport->name }}</option>
                        @endforeach
                    </select>
                    @error('sport_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Oppenent Matches <sup class="text-danger">*</sup></label>
                    <select name="is_oppenent" class="form-control" id="">
                        <option value="" selected>Select Option</option>
                        <option value="1">Yes</option>
                        <option value="0">No</option>
                    </select>
                    @error('is_oppenent')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="d-flex justify-content-center">
                    <a href="{{ route('admin.sessions.index') }}" class="btn btn-danger text-white mr-3"><i
                            class="fa fa-times"></i> Cancel</a>
                    <button class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
                </div>
            </form>
        </div>
    </div>
</x-layouts.dashboard>
