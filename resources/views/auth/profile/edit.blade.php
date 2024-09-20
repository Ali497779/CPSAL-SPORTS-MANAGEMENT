<x-layouts.dashboard>
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between w-100">
                <h3>Edit Profile</h3>
                <a href="{{ route('auth.profile.show') }}" class="btn btn-secondary"><i
                        class="fa fa-arrow-left"></i> Back</a>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('auth.profile.update') }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="avatar" class="form-label">Image <sup class="text-danger">*</sup></label>
                    <input type="file" name="avatar" id="avatar" class="form-control">
                    @error('avatar')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="username" class="form-label">Username <sup class="text-danger">*</sup></label>
                    <input type="text" name="username" id="username" value="{{ auth()->user()->username }}" class="form-control" placeholder="Enter username">
                    @error('username')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" name="email" id="email" value="{{ auth()->user()->email }}" class="form-control" disabled>
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">New Password <sup class="text-danger">*</sup></label>
                    <input type="number" name="password" id="password" class="form-control" placeholder="Enter password">
                    @error('password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Confirm Password <sup class="text-danger">*</sup></label>
                    <input type="number" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Confirm password">
                    @error('password_confirmation')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="d-flex justify-content-center">
                    <a href="{{ route('auth.profile.show') }}" class="btn btn-danger mr-3"><i class="fa fa-cancel"></i>Cancel</a>
                    <button class="btn btn-primary"><i class="fa fa-edit"></i> Update</button>
                </div>
            </form>
        </div>
    </div>
</x-layouts.dashboard>