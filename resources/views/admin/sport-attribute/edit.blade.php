<x-layouts.dashboard>
    @csrf
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between w-100">
                <h3>Edit Attribute</h3>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.sport-attributes.update',$sportAttribute->id) }}" method="POST">
                @csrf
                @method('PUT')
                <input type="hidden" name="sport_id" value="{{ $sportAttribute->sport_id }}">
                <div class="mb-3">
                    <label class="form-label">Name <sup class="text-danger">*</sup></label>
                    <input type="text" name="name" value="{{ $sportAttribute->name }}" class="form-control">
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="d-flex justify-content-center">
                    <a href="{{ route('admin.sport-attributes.index') }}" class="btn btn-danger mr-3"><i
                            class="fa fa-cancel"></i>Cancel</a>
                    <button class="btn btn-primary"><i class="fa fa-floppy-disk"></i> Update</button>
                </div>
            </form>
        </div>
    </div>
</x-layouts.dashboard>
