<x-layouts.dashboard title="Sports Attribute List">
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between w-100">
                <h2>Sports Attributes</h2>
                <a href="{{ route('admin.sport-attributes.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Create</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-center">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Attributes</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($sports as $sport)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $sport->name }}</td>
                                <td>
                                    @forelse ($sport->attributes as $attribute)
                                        <div class="badge badge-success">{{ $attribute->name }}</div>
                                    @empty
                                        <span class="text-danger">No Attribute added yet</span>
                                    @endforelse
                                </td>
                                <td>
                                    <a href="{{ route('admin.sport-attributes.show', $sport->id) }}"
                                       title="Attribute List" class="btn btn-success"><i class="fa fa-eye"></i></a>
                                </td>
                            <tr>
                            @empty
                            <tr class="text-center">
                                <td colspan="4" class="text-danger">No attribute added yet!</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @push('scripts')
        <x-delete-alert />
    @endpush
</x-layouts.dashboard>
