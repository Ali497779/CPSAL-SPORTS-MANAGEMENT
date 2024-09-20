<x-layouts.dashboard>
    @csrf
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between w-100">
                <h3>Sport Attribute</h3>
                <a href="{{ route('admin.sport-attributes.index') }}" class="btn btn-secondary"><i
                        class="fa fa-arrow-left"></i> Back</a>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th>Sport</th>
                        <td>{{ $sport->name }}</td>
                    </tr>
                    @forelse ($sport->attributes as $attribute)
                    <tr>
                        <th>Attribute Name</th>
                        <td>{{ $attribute->name }}</td>
                        <td>
                            <a href="{{ route('admin.sport-attributes.edit', $attribute->id) }}" title="Edit attribute"
                                class="btn btn-primary"><i class="fa fa-edit"></i></a>
                            <form class="d-inline"
                                action="{{ route('admin.sport-attributes.destroy', $attribute->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button id="delete-btn" class="btn btn-danger" title="Delete Battle"><i
                                        class="fa fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    @empty
                        <tr class="text-center">
                            <td colspan="2" class="text-danger">No attribute found!</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.dashboard>