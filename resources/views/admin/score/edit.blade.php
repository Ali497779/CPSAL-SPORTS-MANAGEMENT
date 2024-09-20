<x-layouts.dashboard title="Score Edit">
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between w-100">
                <h3>Edit Score</h3>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.score.update',$score->id) }}" method="post">
                @csrf
                @method('PUT')
                <input type="hidden" name="battle_id" value="{{ $score->battle_id }}">
                <div class="mb-3">
                    <label for="by_team_score" class="form-label">Team Score ({{ $score->battle->byTeam->name }})<sup
                            class="text-danger">*</sup></label>
                    <input type="number" class="form-control" value="{{ old('by_team_score',$score->by_team_score) }}" name="by_team_score" id="by_team_score">
                    @error('by_team_score')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="for_team_score" class="form-label">Team Score ({{ $score->battle->forTeam->name }})<sup
                            class="text-danger">*</sup></label>
                    <input type="number" class="form-control" value="{{ old('for_team_score',$score->for_team_score) }}" name="for_team_score" id="for_team_score">
                    @error('for_team_score')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="d-flex justify-content-center">
                    <a href="{{ route('admin.battles.index') }}" class="btn btn-danger mr-3"><i
                            class="fa fa-cancel"></i>Cancel</a>
                    <button class="btn btn-primary"><i class="fa fa-edit"></i> Update</button>
                </div>
            </form>
        </div>
    </div>
</x-layouts.dashboard>
