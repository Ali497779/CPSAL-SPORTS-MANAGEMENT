<x-layouts.dashboard title="Team Create">
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between w-100">
                <h3>Players Detail</h3>
                <a href="{{ route('coach.teams.index') }}" class="btn btn-secondary"><i class="fa fa-arrow-left"></i>
                    Back</a>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tbody>
                    @foreach ($players as $player)
                        <tr>
                            <th>Name</th>
                            <td>{{ $player->name }}</td>
                            <td>
                                <a href="{{ route('coach.teams.players.edit', [$player->team_id,$player->id]) }}"
                                    class="btn btn-primary"><i class="fa fa-edit"></i>
                                </a>
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
