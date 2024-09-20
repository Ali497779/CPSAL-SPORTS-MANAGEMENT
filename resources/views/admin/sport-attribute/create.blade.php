<x-layouts.dashboard>
    @csrf
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between w-100">
                <h3>Add New Attribute</h3>
                <a href="{{ route('admin.sport-attributes.index') }}" class="btn btn-secondary"><i class="fa fa-arrow-left"></i> Back</a>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.sport-attributes.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="sport_id" class="form-label">Sport <sup class="text-danger">*</sup></label>
                    <select class="form-control" name="sport_id" id="sport_id">
                        <option value="" selected>Select sport</option>
                        @forelse ($sports as $sport)
                        <option value="{{ $sport->id }}">{{ $sport->name }}</option>
                        @empty
                        <option value="" class="text-danger">No sport found</option>
                        @endforelse
                    </select>
                    @error('sport_id')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Name <sup class="text-danger">*</sup></label>
                    <div class="row">
                        <div class="col-md-10">
                            <input type="text" name="names[]" class="form-control">
                            @error('names.*')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-2">
                            <button id="add-fields" class="btn btn-primary"><i class="fa fa-plus"></i> Add More</button>
                        </div>
                    </div>
                </div>
                <div id="more-fields"></div>
                <div class="d-flex justify-content-center">
                    <a href="{{ route('admin.sport-attributes.index') }}" class="btn btn-danger text-white mr-3"><i
                            class="fa fa-times"></i> Cancel</a>
                    <button class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
                </div>
            </form>
        </div>
    </div>
    @push('scripts')
    <script>
        var i = 1;
            $("#add-fields").click(function(e) {
                e.preventDefault();
                $("#more-fields").append(`
                <div class="mb-3" id="field${i}">
                    <label class="form-label">Name <sup class="text-danger">*</sup></label>
                    <div class="row">
                        <div class="col-md-8">
                            <input type="text" name="names[]" class="form-control">
                            @error('names.*')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-4">
                            <button type="button" onclick="remove(${i})" class="btn btn-danger" id="remove-btn"><i class="fa fa-trash"></i></button>
                        </div>
                    </div>
                </div>
                `);
            });
            function remove(i) {
                $("#field"+i).remove();
            };
    </script>
    @endpush
</x-layouts.dashboard>