<x-layouts.dashboard title="Coach List">
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between w-100">
                <h2>Coaches</h2>
                <a href="{{ route('admin.coaches.create') }}" class="btn btn-primary" title="Add New Coach"><i class="fa fa-plus"></i> Add
                    New</a>
            </div>
        </div>

        
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-center">
                    <thead class="table-dark">

                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($coaches as $coach)
                        {{-- {{dd($coach->id) }} --}}

                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $coach->username }}</td>
                                <td>
                                    @if (!$coach->is_verified)
                                        <form class="d-inline"
                                            action="{{ route('admin.coaches.verify', $coach->id) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <button class="btn btn-info" title="Verify Coach"><i
                                                    class="fa fa-check"></i></button>
                                        </form>
                                    @else
                                        <form class="d-inline"
                                            action="{{ route('admin.coaches.block', $coach->id) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <button class="btn btn-info" title="Block Coach"><i
                                                    class="fa fa-times"></i></button>
                                        </form>
                                    @endif
                                    <a href="{{ route('admin.coaches.edit', $coach->id) }}" title="Profile Edit"
                                        class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                    <a href="{{ route('admin.coaches.show', $coach->id) }}" title="Profile Detail"
                                        class="btn btn-success"><i class="fa fa-eye"></i></a>
                                    <form id="form" class="d-inline"
                                        action="{{ route('admin.coaches.destroy', $coach->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button id="delete-btn" class="btn btn-danger" title="Delete Coach"><i
                                                class="fa fa-trash"></i></button>
                                    </form>
                                </td>
                            <tr>
                            @empty
                            <tr class="text-center">
                                <td colspan="7" class="text-danger">No Coach added yet!</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                <div>
                    {{-- {{ $coaches->links() }} --}}
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
        <x-delete-alert />
    @endpush
</x-layouts.dashboard>
