<x-layouts.dashboard title="Sport List">
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between w-100">
                <h2>Sports</h2>
                <a href="{{ route('admin.sport.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Add New</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-center">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Min Player</th>
                            <th scope="col">Max Player</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($sports as $sport)
                            <tr>
                                <td scope="row">{{ $loop->iteration }}</td>
                                <td>{{ $sport->name }}</td>
                                <td>{{ $sport->min_players }}</td>
                                <td>{{ $sport->max_players }}</td>
                                <td>
                                    <a href="{{ route('admin.sport.edit',$sport->id) }}" title="Edit Sport" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                    <a href="{{ route('admin.sport.show',$sport->id) }}" title="Sport Detail" class="btn btn-success"><i class="fa fa-eye"></i></a>
                                    <form id="form" class="d-inline" action="{{ route('admin.sport.destroy',$sport->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button id="delete-btn" class="btn btn-danger" title="Delete Battle"><i class="fa fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr class="text-center">
                                <td colspan="7" class="text-danger">No sport added yet!</span>
                            </div>
                        @endforelse
                    </tbody>
                </table>
                <div>
                    {{ $sports->links() }}
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
        <x-delete-alert />
    @endpush
</x-layouts.dashboard>
