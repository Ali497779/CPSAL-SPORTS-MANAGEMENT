<x-layouts.dashboard title="School Create">
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between w-100">
                <h3>Edit School</h3>
                <a href="{{ route('coach.school.index') }}" class="btn btn-secondary"><i
                        class="fa fa-arrow-left"></i> Back</a>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('coach.school.update',$school->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <input type="hidden" value="{{ auth()->id() }}" name="coach_id">
                <div class="mb-3">
                    <label for="name" class="form-label">Name <sup class="text-danger">*</sup></label>
                    <input type="text" name="name" id="name" value="{{ $school->name }}" class="form-control" placeholder="Enter name">
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image <sup class="text-danger">*</sup></label>
                    <input type="file" name="image" id="image" class="form-control">
                    @error('image')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Address <sup class="text-danger">*</sup></label>
                    <input type="text" name="address" id="address" value="{{ $school->address }}" class="form-control" placeholder="Enter address">
                    @error('address')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone <sup class="text-danger">*</sup></label>
                    <input type="number" name="phone" id="phone" value="{{ $school->phone }}" class="form-control" placeholder="Enter phone">
                    @error('phone')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="fax" class="form-label">Fax Number <sup class="text-danger">*</sup></label>
                    <input type="number" name="fax" id="fax" value="{{ $school->fax }}" class="form-control" placeholder="Enter fax number">
                    @error('fax')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="principal_name" class="form-label">Principal Name <sup class="text-danger">*</sup></label>
                    <input type="text" name="principal_name" id="principal_name" value="{{ $school->principal_name }}" class="form-control" placeholder="Enter principal name ">
                    @error('principal_name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="principal_phone" class="form-label">Principal phone <sup class="text-danger">*</sup></label>
                    <input type="number" name="principal_phone" id="principal_phone" value="{{ $school->principal_phone }}" class="form-control" placeholder="Enter principal phone ">
                    @error('principal_phone')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="principal_email" class="form-label">Principal Email <sup class="text-danger">*</sup></label>
                    <input type="email" name="principal_email" id="principal_email" value="{{ $school->principal_email }}" class="form-control" placeholder="Enter principal email ">
                    @error('principal_email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="director_name" class="form-label">Director Name <sup class="text-danger">*</sup></label>
                    <input type="text" name="director_name" id="director_name" value="{{ $school->director_name }}" class="form-control" placeholder="Enter director name ">
                    @error('director_name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="director_phone" class="form-label">Director phone <sup class="text-danger">*</sup></label>
                    <input type="number" name="director_phone" id="director_phone" value="{{ $school->director_phone }}" class="form-control" placeholder="Enter director phone ">
                    @error('director_phone')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="director_email" class="form-label">Director Email <sup class="text-danger">*</sup></label>
                    <input type="email" name="director_email" id="director_email" value="{{ $school->director_email }}" class="form-control" placeholder="Enter director email ">
                    @error('director_email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="d-flex justify-content-center">
                    <a href="{{ route('coach.school.index') }}" class="btn btn-danger mr-3"><i class="fa fa-cancel"></i>Cancel</a>
                    <button class="btn btn-primary"><i class="fa fa-floppy-disk"></i> Save</button>
                </div>
            </form>
        </div>
    </div>
</x-layouts.dashboard>
