<x-layouts.dashboard title="Team Create">
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between w-100">
                <h3>Edit Players</h3>
                <a href="{{ route('coach.teams.players.show',request()->teamId) }}" class="btn btn-secondary"><i class="fa fa-arrow-left"></i>
                    Back</a>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('coach.teams.players.update', [request()->teamId,$player->id]) }}" method="post">
                @csrf
                @method('PUT')
                    <div class="mb-3">
                        <label class="form-label">Name <sup class="text-danger">*</sup></label>
                        <input type="text" name="name" value="{{ $player->name }}" class="form-control"
                            placeholder="Enter player name">
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <div class="row">
                            @foreach ($player->sportAttributeValues as $attribute)
                                <div class="col-md-3">
                                    <label class="form-label">{{ $attribute->sportAttribute->name }} <sup
                                            class="text-danger">*</sup></label>
                                    <input type="text"
                                        name="attributes[{{ $attribute->id }}]"
                                        value="{{ $attribute->value }}"
                                        class="form-control" placeholder="Enter player {{ $attribute->name }}">
                                    @error('attributes.*')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            @endforeach
                        </div>
                    </div>
                <div class="d-flex justify-content-center">
                    <a href="{{ route('coach.teams.players.show',request()->teamId) }}" class="btn btn-danger text-center mr-3"><i
                            class="fa fa-times"></i> Cancel</a>
                    <button class="btn btn-primary"><i class="fa fa-edit"></i> Update</button>
                </div>
            </form>
        </div>
    </div>
</x-layouts.dashboard>
