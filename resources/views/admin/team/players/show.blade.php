<x-layouts.dashboard title="Team Create">
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between w-100">
                <h3>Players Detail</h3>
                <a href="{{ route('admin.teams.index') }}" class="btn btn-secondary"><i class="fa fa-arrow-left"></i>
                    Back</a>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                    @foreach ($players as $player)
                    @if (isset($player->image))
                    
                    <td>
                        <img style="object-fit: cover;" width="150px" src="{{ asset('assets/player/'.$player->image) }}" alt="Player Avatar">
                    </td>
                
                    @endif
                        
                            <th></th>
                            <td>{{ $player->name }}</td>
                            <td>
                                <a href="{{ route('admin.teams.players.edit', [$player->team_id,$player->id]) }}"
                                    class="btn btn-primary"><i class="fa fa-edit"></i></a>
                            </td>
                        </tr>
                        @foreach ($player->sportAttributeValues as $attribute)
                            <tr>
                                <th>{{ $attribute->sportAttribute->name }}</th>
                                <td colspan="2">{{ $attribute->value }}</td>
                            </tr>
                        @endforeach
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.dashboard>
