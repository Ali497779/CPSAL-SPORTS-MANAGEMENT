<x-layouts.dashboard>
    {{-- <form action="{{ route('admin.coaches.update',$coach->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between w-100">
                    <h3 class="text-center">Update Coach</h3>
                    <a href="{{ route('admin.coaches.index') }}" class="btn btn-secondary"><i class="fa fa-arrow-left"></i> Back</a>
                </div>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label for="avatar" class="form-label">Avatar <sup class="text-danger">*</sup></label>
                    <img src="{{ Storage::url($coach->avatar) }}" width="150px" alt="Coach avatar">
                    <input type="file" name="avatar" id="avatar" class="form-control">
                    @error('avatar')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email <sup class="text-danger">*</sup></label>
                    <input type="email" name="email" id="email" value="{{ $coach->email }}" class="form-control" placeholder="Enter email">
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="username" class="form-label">Username <sup class="text-danger">*</sup></label>
                    <input type="text" name="username" value="{{ $coach->username }}" id="username" class="form-control"
                        placeholder="Enter username">
                    @error('username')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password <sup class="text-danger">*</sup></label>
                    <input type="password" name="password" id="password" class="form-control"
                        placeholder="Enter password">
                    @error('password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Confrim Password <sup
                            class="text-danger">*</sup></label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control"
                        placeholder="Confirm password">
                    @error('password_confirmation')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header d-flex text-center">
                <h3>Add New School</h3>
            </div>
            <div class="card-body">
                <input type="hidden" value="{{ auth()->id() }}" name="coach_id">
                <div class="mb-3">
                    <label for="name" class="form-label">Name <sup class="text-danger">*</sup></label>
                    <input type="text" name="name" id="name" value="{{ $coach->school->name }}" class="form-control" placeholder="Enter name">
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image <sup class="text-danger">*</sup></label>
                    <img src="{{ Storage::url($coach->school->image) }}" width="150px" alt="School Image">
                    <input type="file" name="image" id="image" class="form-control">
                    @error('image')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Address <sup class="text-danger">*</sup></label>
                    <input type="text" name="address" id="address" class="form-control" value="{{ $coach->school->address }}"
                        placeholder="Enter address">
                    @error('address')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone <sup class="text-danger">*</sup></label>
                    <input type="number" name="phone" id="phone" class="form-control" value="{{ $coach->school->phone }}" placeholder="Enter phone">
                    @error('phone')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="fax" class="form-label">Fax Number <sup class="text-danger">*</sup></label>
                    <input type="number" name="fax" id="fax" class="form-control" value="{{ $coach->school->fax }}"
                        placeholder="Enter fax number">
                    @error('fax')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="principal_name" class="form-label">Principal Name <sup
                            class="text-danger">*</sup></label>
                    <input type="text" name="principal_name" value="{{ $coach->school->principal_name }}" id="principal_name" class="form-control"
                        placeholder="Enter principal name ">
                    @error('principal_name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="principal_phone" class="form-label">Principal phone <sup
                            class="text-danger">*</sup></label>
                    <input type="number" name="principal_phone" value="{{ $coach->school->principal_phone }}" id="principal_phone" class="form-control"
                        placeholder="Enter principal phone ">
                    @error('principal_phone')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="principal_email" class="form-label">Principal Email <sup
                            class="text-danger">*</sup></label>
                    <input type="email" name="principal_email" value="{{ $coach->school->principal_email }}" id="principal_email" class="form-control"
                        placeholder="Enter principal email ">
                    @error('principal_email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="director_name" class="form-label">Director Name <sup
                            class="text-danger">*</sup></label>
                    <input type="text" name="director_name" value="{{ $coach->school->director_name }}" id="director_name" class="form-control"
                        placeholder="Enter director name ">
                    @error('director_name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="director_phone" class="form-label">Director phone <sup
                            class="text-danger">*</sup></label>
                    <input type="number" name="director_phone" value="{{ $coach->school->director_phone }}" id="director_phone" class="form-control"
                        placeholder="Enter director phone ">
                    @error('director_phone')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="director_email" class="form-label">Director Email <sup
                            class="text-danger">*</sup></label>
                    <input type="email" name="director_email" value="{{ $coach->school->director_email }}" id="director_email" class="form-control"
                        placeholder="Enter director email ">
                    @error('director_email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="d-flex justify-content-center">
                    <a href="{{ route('admin.coaches.index') }}" class="btn btn-danger text-white mr-3"><i
                            class="fa fa-times"></i> Cancel</a>
                    <button class="btn btn-primary"><i class="fa fa-edit"></i> Update</button>
                </div>
            </div>
        </div>
    </form> --}}
{{-- {{dd($coach) }} --}}

    <form action="{{ route('admin.coaches.update',$coach->id,$coach->school->id) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between w-100">
                    <h3 class="text-center">Add New Coach</h3>
                    <a href="{{ route('admin.coaches.index') }}" class="btn btn-secondary"><i class="fa fa-arrow-left"></i> Back</a>
                </div>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label for="avatar" class="form-label">Avatar <sup class="text-danger">*</sup></label>
                    <input type="file" name="avatar" id="avatar" class="form-control">
                    @error('avatar')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email <sup class="text-danger">*</sup></label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}" class="form-control" placeholder="Enter email">
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="username" class="form-label">Name <sup class="text-danger">*</sup></label>
                    <input type="username"  name="username" value="{{ old('username') }}" id="username" class="form-control"
                        placeholder="Enter username">
                    @error('username')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="age" class="form-label">Age <sup class="text-danger">*</sup></label>
                    <input type="number"  name="coach_age" value="{{ old('coach_age') }}" id="age" class="form-control"
                        placeholder="Enter Age">
                    @error('coach_age')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="experience" class="form-label">Experience <sup class="text-danger">*</sup></label>
                    <input type="number"  name="coach_experience" value="{{ old('coach_experience') }}" id="experience" class="form-control"
                        placeholder="Enter Experience">
                    @error('coach_experience')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="nationality" class="form-label">Nationality <sup class="text-danger">*</sup></label>
                    <input type="text"  name="coach_nationality" value="{{ old('coach_nationality') }}" id="nationality" class="form-control"
                        placeholder="Enter Nationality">
                    @error('coach_nationality')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>


                <div class="mb-3">
                    <label for="pastTeam" class="form-label">Past Team <sup class="text-danger">*</sup></label>
                    <input type="text"  name="coach_past_team" value="{{ old('coach_past_team') }}" id="pastTeam" class="form-control"
                        placeholder="Enter Past Team">
                    @error('coach_past_team')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                
                

                <div class="mb-3">
                    <label for="password" class="form-label">Password <sup class="text-danger">*</sup></label>
                    <input type="password" name="password" id="password" class="form-control"
                        placeholder="Enter password">
                    @error('password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Confrim Password <sup
                            class="text-danger">*</sup></label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control"
                        placeholder="Confirm password">
                    @error('password_confirmation')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header d-flex text-center">
                <h3>Program Athletic Assitant Information</h3>
            </div>
            <div class="card-body">
                <input type="hidden" value="{{ auth()->id() }}" name="coach_id">
                <div class="mb-3">
                    <label for="athletic_assitant_name" class="form-label">Name <sup class="text-danger">*</sup></label>
                    <input type="text" name="athletic_assitant_name" id="athletic_assitant_name" value="{{ old('athletic_assitant_name') }}" class="form-control" placeholder="Enter name">
                    @error('athletic_assitant_name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="athletic_assitant_position" class="form-label">Position <sup class="text-danger">*</sup></label>
                    <input type="text" name="athletic_assitant_position" id="position" value="{{ old('athletic_assitant_position') }}" class="form-control"
                        placeholder="Enter Position">
                    @error('athletic_assitant_position')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="athletic_assitant_email" class="form-label">Athletic Email <sup class="text-danger">*</sup></label>
                    <input type="text" name="athletic_assitant_email" id="athletic_email" value="{{ old('athletic_assitant_email') }}" class="form-control"
                        placeholder="Enter Athletic Email">
                    @error('athletic_email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="athletic_assitant_cell" class="form-label">Athletic Phone Number<sup class="text-danger">*</sup></label>
                    <input type="number" name="athletic_assitant_cell" id="athletic_phone" value="{{ old('athletic_assitant_cell') }}" class="form-control" placeholder="Enter Athletic phone">
                    @error('athletic_phone')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="athletic_assitant_homephone" class="form-label">Athletic Home Number <sup class="text-danger">*</sup></label>
                    <input type="number" name="athletic_assitant_homephone" id="athletic_home_phone" value="{{ old('athletic_assitant_homephone') }}" class="form-control"
                        placeholder="Enter Athletic Home Phone">
                    @error('athletic_home_phone')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                
            </div>
        </div>

        <div class="card">
            <div class="card-header d-flex text-center">
                <h3>School Details</h3>
            </div>
            <div class="card-body">
                <input type="hidden" value="{{ auth()->id() }}" name="coach_id">
              
                
                <div class="mb-3">
                    <label for="principal_name" class="form-label">Principal Name <sup
                            class="text-danger">*</sup></label>
                    <input type="text" name="principal_name" value="{{ old('principal_name') }}" id="principal_name" class="form-control"
                        placeholder="Enter principal name ">
                    @error('principal_name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="principal_phone" class="form-label">Principal phone <sup
                            class="text-danger">*</sup></label>
                    <input type="number" name="principal_phone" value="{{ old('principal_phone') }}" id="principal_phone" class="form-control"
                        placeholder="Enter principal phone ">
                    @error('principal_phone')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="principal_email" class="form-label">Principal Email <sup
                            class="text-danger">*</sup></label>
                    <input type="email" name="principal_email" value="{{ old('principal_email') }}" id="principal_email" class="form-control"
                        placeholder="Enter principal email ">
                    @error('principal_email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
             
                
            </div>
        </div>

        <div class="card">
            <div class="card-header d-flex text-center">
                <h3>School Gymnasium Information</h3>
            </div>
            <div class="card-body">
                <input type="hidden" value="{{ auth()->id() }}" name="coach_id">
              
                
                <div class="mb-3">
                    <label for="gymnasium" class="form-label">Does your shcool have a gymnasium <sup
                            class="text-danger">*</sup></label>
                    <input type="text" name="school_have_gym" value="{{ old('school_have_gym') }}" id="gymnasium" class="form-control"
                        placeholder="Enter Does your shcool have a gymnasium">
                    @error('gymnasium')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="firstName" class="form-label">First Name <sup
                            class="text-danger">*</sup></label>
                    <input type="text" name="f_name" value="{{ old('f_name') }}" id="firstName" class="form-control"
                        placeholder="Enter First name ">
                    @error('principal_email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="lastName" class="form-label">Last Name <sup
                            class="text-danger">*</sup></label>
                    <input type="text" name="l_name" value="{{ old('l_name') }}" id="lastName" class="form-control"
                        placeholder="Enter last name ">
                    @error('principal_email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                
            </div>
        </div>


        <div class="card">
            <div class="card-header d-flex text-center">
                <h3>School Details</h3>
            </div>
            <div class="card-body">
                <input type="hidden" value="{{ auth()->id() }}" name="coach_id">
              
                
                <div class="mb-3">
                    <label for="monday" class="form-label">Monday <sup
                            class="text-danger">*</sup></label>
                    <input type="text" name="monday" value="{{ old('monday') }}" id="monday" class="form-control"
                        placeholder=" ">
                    @error('monday')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
        
        
                <div class="mb-3">
                    <label for="Tuesday" class="form-label">Tuesday <sup
                            class="text-danger">*</sup></label>
                    <input type="text" name="tuesday" value="{{ old('tuesday') }}" id="Tuesday" class="form-control"
                        placeholder=" ">
                    @error('Tuesday')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
        
                
                <div class="mb-3">
                    <label for="wednesday" class="form-label">Wednesday <sup
                            class="text-danger">*</sup></label>
                    <input type="text" name="wednesday" value="{{ old('wednesday') }}" id="wednesday" class="form-control"
                        placeholder=" ">
                    @error('wednesday')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>



                <div class="mb-3">
                    <label for="thursday" class="form-label">Thursday <sup
                            class="text-danger">*</sup></label>
                    <input type="text" name="thursday" value="{{ old('thursday') }}" id="thursday" class="form-control"
                        placeholder=" ">
                    @error('thursday')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
        
        
                <div class="mb-3">
                    <label for="friday" class="form-label">Friday <sup
                            class="text-danger">*</sup></label>
                    <input type="text" name="friday" value="{{ old('friday') }}" id="friday" class="form-control"
                        placeholder=" ">
                    @error('friday')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
        
                
                <div class="mb-3">
                    <label for="sat" class="form-label">Saturday <sup
                            class="text-danger">*</sup></label>
                    <input type="text" name="saturday" value="{{ old('saturday') }}" id="sat" class="form-control"
                        placeholder=" ">
                    @error('sat')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

            </div>
        </div>


        <div class="card">
            <div class="card-header d-flex text-center">
                <h3>School Information</h3>
            </div>
            <div class="card-body">
                <input type="hidden" value="{{ auth()->id() }}" name="coach_id">
                <div class="mb-3">
                    <label for="name" class="form-label">School Name <sup class="text-danger">*</sup></label>
                    <input type="text" name="name" id="name" value="{{ old('name') }}" class="form-control" placeholder="Enter name">
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
                    <input type="text" name="address" id="address" value="{{ old('address') }}" class="form-control"
                        placeholder="Enter address">
                    @error('address')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="gymAddress" class="form-label">Gymnasium Address <sup class="text-danger">*</sup></label>
                    <input type="text" name="gymnasium_address" id="gymAddress" value="{{ old('gymnasium_address') }}" class="form-control"
                        placeholder="Enter Gymnaisum Address">
                    @error('gymAddress')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">School Phone Number<sup class="text-danger">*</sup></label>
                    <input type="number" name="phone" id="phone" value="{{ old('phone') }}" class="form-control" placeholder="Enter phone">
                    @error('phone')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="fax" class="form-label">Fax Number <sup class="text-danger">*</sup></label>
                    <input type="number" name="fax" id="fax" value="{{ old('fax') }}" class="form-control"
                        placeholder="Enter fax number">
                    @error('fax')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="director_name" class="form-label">Athletic Director Name <sup
                            class="text-danger">*</sup></label>
                    <input type="text" name="director_name" value="{{ old('director_name') }}" id="director_name" class="form-control"
                        placeholder="Enter director name ">
                    @error('director_name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="director_phone" class="form-label">Athletic Director phone <sup
                            class="text-danger">*</sup></label>
                    <input type="number" name="director_phone" value="{{ old('director_phone') }}" id="director_phone" class="form-control"
                        placeholder="Enter director phone ">
                    @error('director_phone')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="director_email" class="form-label">Athletic Director Email <sup
                            class="text-danger">*</sup></label>
                    <input type="email" name="director_email" value="{{ old('director_email') }}" id="director_email" class="form-control"
                        placeholder="Enter director email ">
                    @error('director_email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                @if($errors->any())
                    @foreach ($errors->all() as $error)
                        <span class="text-danger">{{ $error }}</span>
                    @endforeach
                @endif
                <div class="d-flex justify-content-center">
                    <a href="{{ route('admin.coaches.index') }}" class="btn btn-danger text-white mr-3"><i
                            class="fa fa-times"></i> Cancel</a>
                    <button class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
                </div>
            </div>
        </div>
    </form>
</x-layouts.dashboard>
