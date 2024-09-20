<x-layouts.dashboard title="Team Create">
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between w-100">
                <h3>Add Team Players</h3>
                <a href="{{ route('admin.teams.index') }}" class="btn btn-secondary"><i class="fa fa-arrow-left"></i>
                    Back</a>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.teams.players.store', request()->teamid) }}" method="post" enctype="multipart/form-data">
                @csrf
                @for ($i = 0; $i <= $sport->max_players; $i++)
                    <div class="mb-3">
                        <label class="form-label">Name <sup class="text-danger">*</sup></label>
                        <input type="text" name="names[{{ $i }}][name]" class="form-control"
                            placeholder="Enter player name">
                        @error('names.*.name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                   
                        <label class="form-label">Image <sup class="text-danger">*</sup></label>
                        <input type="file" name="names[{{ $i }}][image]" class="form-control"
                            placeholder="Enter player Image">
                    </div>
                    <div class="mb-3">
                        <div class="row">
                            @foreach ($sport->attributes as $attribute)
                                <div class="col-md-3">
                                    <label class="form-label">{{ $attribute->name }} <sup
                                            class="text-danger">*</sup></label>
                                    <input type="text"
                                        name="names[{{ $i }}][attributes][{{ $attribute->id }}]"
                                        class="form-control" placeholder="Enter player {{ $attribute->name }}" required="false">
                                    {{-- @error('names.*.attributes.*')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror --}}
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endfor
                <div class="d-flex justify-content-center">
                    <a href="{{ route('admin.teams.index') }}" class="btn btn-danger text-white mr-3"><i
                            class="fa fa-times"></i> Cancel</a>
                    <button class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
                </div>
            </form>
        </div>
    </div>
</x-layouts.dashboard>
