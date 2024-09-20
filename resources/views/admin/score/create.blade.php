<x-layouts.dashboard title="Score Create">

{{-- {{dd($battles) }} --}}
   
{{--    
@foreach ($battles as $battle) --}}
    {{-- {{dd($battle) }} --}}

    <form action="{{ route('admin.score.store',[request()->battle->id,$battle->session_id]) }}" method="post">
        @csrf
        <div class="card">
            
            <div class="card-header">
                <h3>Team 1 Score</h3>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label class="form-label">Team Score ({{ $battle->byTeam->name }})<sup
                            class="text-danger">*</sup></label>
                    <input type="number" class="form-control" name="teams[0][score]">
                </div>
                <input type="hidden" name="teams[0][team_id]" value="{{ $battle->by_team_id }}">
                <div class="mb-3">
                    <div class="row">
                        @foreach ($battle->byTeam->sessionTeam->sessionTeamPlayers as $sessionplayer)
                            <div class="col-md-3">
                                <label class="form-label">Player Score ({{ $sessionplayer->player->name }})<sup
                                        class="text-danger">*</sup></label>
                                <input type="number" class="form-control" name="teams[0][players][{{ $sessionplayer->player->id }}]">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        @if ($battle->forTeam != null)
        <div class="card">
            <div class="card-header">
                <h3>Team 2 Score</h3>
            </div>
            <div class="card-body">

                <div class="mb-3">
                    <label class="form-label">Team Score ({{ $battle->forTeam->name }})<sup
                            class="text-danger">*</sup></label>
                    <input type="number" class="form-control" name="teams[1][score]">
                </div>
                
                  <div class="mb-3">
                    <div class="row">
                        @foreach ($battle->ForTeam->sessionTeam->sessionTeamPlayers as $sessionplayer)
                            <div class="col-md-3">
                                <label class="form-label">Player Score ({{ $sessionplayer->player->name }})<sup
                                        class="text-danger">*</sup></label>
                                <input type="number" class="form-control" name="teams[1][players][{{ $sessionplayer->player->id }}]">
                            </div>
                        @endforeach
                    </div>
                </div>   
                @endif
                <input type="hidden" name="teams[1][team_id]" value="{{ $battle->for_team_id }}">
               
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <a href="{{ route('admin.battles.index') }}" class="btn btn-danger mr-3"><i
                    class="fa fa-cancel"></i>Cancel</a>
            <button class="btn btn-primary"><i class='fa-solid fa-floppy-disk'>Submit</i></button>
        </div>
    </form>




{{-- 
    @endforeach --}}
</x-layouts.dashboard>
