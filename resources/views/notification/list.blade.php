<x-layouts.dashboard title="Sport List">
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between w-100">
                <h2>Notifications</h2>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-center">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Message</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($notifications as $notification)
                            <tr>
                                <td scope="row">{{ $loop->iteration }}</td>
                                <td>{{ $notification->message }}</td>
                                <td></td>
                            </tr>
                        @empty
                            <tr class="text-center">
                                <td colspan="7" class="text-danger">No sport added yet!</span>
                            </div>
                        @endforelse
                    </tbody>
                </table>
                <div>
                    {{ $notifications->links() }}
                </div>
            </div>
        </div>
    </div>
</x-layouts.dashboard>
