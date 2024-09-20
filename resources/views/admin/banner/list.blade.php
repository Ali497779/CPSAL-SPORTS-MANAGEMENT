<x-layouts.dashboard title="Coach List">
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between w-100">
                <h2>Coaches</h2>
                <a href="{{ route('admin.banner.create') }}" class="btn btn-primary" title="Add New Coach"><i class="fa fa-plus"></i> Add
                    New</a>
            </div>
        </div>
        {{-- {{dd($banners) }} --}}
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-light table-bordered text-center">
                    <thead class="bg-light">
                        <tr>
                            <th>#</th>
                            <th>Banner Image</th>
                            <th>Heading</th>
                            <th>Quote</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($banners as $banner)
                        {{-- {{dd($coach->id) }} --}}

                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td><img src="{{ Storage::url($banner->image) }}" width="100px"alt=""></td>
                                <td>{{$banner->heading }} </td>
                                <td>{{$banner->quote }}</td>  
                                <td>
                                    <a href="{{ route('admin.banner.edit', $banner->id) }}" title="Profile Edit"
                                        class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                    <a href="{{ route('admin.banner.show', $banner->id) }}" title="Profile Detail"
                                        class="btn btn-success"><i class="fa fa-eye"></i></a>
                                    <form id="form" class="d-inline"
                                        action="{{ route('admin.banner.destroy', $banner->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button id="delete-btn" class="btn btn-danger" title="Delete Coach"><i
                                                class="fa fa-trash"></i></button>
                                    </form>
                                </td>
                            <tr>
                        @endforeach
                            
                    </tbody>
                </table>
                <div>
                    {{-- {{ $coaches->links() }} --}}
                </div>
            </div>
        </div>
    </div>
    <style>
        .yellow{
            color: #ffc722;
        }
    </style>
    @push('scripts')
        <x-delete-alert />
    @endpush
</x-layouts.dashboard>
