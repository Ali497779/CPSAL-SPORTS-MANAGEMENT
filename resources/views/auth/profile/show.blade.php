<x-layouts.dashboard>
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between w-100">
                <h3>Profile</h3>
                <a href="{{ route('auth.profile.edit') }}" class="btn btn-primary"><i
                        class="fa fa-edit"></i> Edit</a>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th>Image</th>
                        <td>
                            <img src="{{ Storage::url(auth()->user()->avatar) }}" height="100px" width="100px" class="img-fluid" alt="user image">
                        </td>
                    </tr>
                    <tr>
                        <th>Username</th>
                        <td>{{ auth()->user()->username }}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{ auth()->user()->email }}</td>
                    </tr>
                    <tr>
                        <th>Role</th>
                        <td>{{ auth()->user()->getRoleNames()->first() }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.dashboard>
