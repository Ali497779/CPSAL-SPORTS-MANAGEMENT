<x-layouts.dashboard title="Coach Detail">
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between w-100">
                <h3>Coach Detail</h3>
                <a href="{{ route('admin.coaches.index') }}" class="btn btn-secondary"><i class="fa fa-arrow-left"></i>
                    Back</a>
                    {{-- {{dd($coach) }} --}}
            </div>
        </div>
    
        <div class="card-body">
        
<img style="object-fit: cover;" width="200px" src="{{ asset('assets/coach/'.$coach->avatar) }}" alt="Coach Avatar">


            <table class="table table-bordered">
                <tbody>
                    
                    <tr>
                        <th>Name</th>
                        <td>{{ $coach->username }}</td>
                    </tr>
                    <tr>
                        {{-- <th>School Image</th>
                        <td>
                            <img src="{{ Storage::url($coach->school?->image) }}" width="50px" alt="school image">
                        </td> --}}
                        <th>Age</th>
                        <td>
                        
                            {{$coach->coach_age}}
                        </td>
                    </tr>
                    <tr>
                        <th>School/College</th>
                        <td>
                            {{ $coach->school?->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>Experience</th>
                        <td>
                            {{$coach->coach_experience}}
                        </td>
                        {{-- <th>Sports Name</th>
                        @foreach ($teams as $team)
                            <td>{{ $team->sport->name }}</td>
                        @endforeach --}}
                    </tr>
                    <tr>
                        <th>Nationality</th>
                        <td>{{$coach->coach_nationality}}</td>
                        {{-- <th>Team Name</th>
                        @foreach ($teams as $team)
                            <td>{{ $team->name }}</td>
                        @endforeach --}}
                    </tr>
                    <tr>

                        <th>Past Team</th>
                        <td>{{$coach->coach_past_team}}</td>
                    </tr>
                    

                </tbody>
            </table>
        </div>
    </div>


    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between w-100">
                <h3>School Information</h3>
                    {{-- {{dd($coach) }} --}}
            </div>
        </div>
        <div class="card-body">

            <table class="table table-bordered">
                <tbody>
                    
                    <tr>
                        <th>Name</th>
                        <td>{{ $coach->school?->name }}</td>
                    </tr>
          
                    <tr>
                        <th>Gymnasium Address</th>
                        <td>{{$coach->school->gymnasium_address}}</td>
                    </tr>
                    <tr>
                        <th>School Phone No.</th>
                        <td>{{$coach->school->phone}}</td>
                    </tr>
                    <tr>
                        <th>Adtheletic Director Name</th>
                        <td>{{$coach->school->athletic_assitant_name}}</td>
                    </tr>
                    <tr>
                        <th>Adtheletic Director Email</th>
                        <td>{{$coach->school->athletic_assitant_email}}</td>
                    </tr><tr>
                        <th>Adtheletic Director Cell</th>
                        <td>{{$coach->school->athletic_assitant_cell}}</td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between w-100">
                <h3>Program Athletic Assitant Information</h3>
                    {{-- {{dd($coach) }} --}}
            </div>
        </div>
        <div class="card-body">

            <table class="table table-bordered">
                <tbody>
                    
                    <tr>
                        <th>Name</th>
                        <td>{{ $coach->school->athletic_assitant_name }}</td>
                    </tr>
          
                    <tr>
                        <th>Position</th>
                        <td>{{$coach->school->athletic_assitant_position}}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{$coach->school->athletic_assitant_email}}</td>
                    </tr>
                    <tr>
                        <th>Cell</th>
                        <td>{{$coach->school->athletic_assitant_cell}}</td>
                    </tr>
                    <tr>
                        <th>Home</th>
                        <td>{{$coach->school->athletic_assitant_homephone}}</td>
                    </tr>
                    
                    
                </tbody>
            </table>
        </div>
    </div>


    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between w-100">
                <h3>School Details</h3>
                    {{-- {{dd($coach) }} --}}
            </div>
        </div>
        <div class="card-body">

            <table class="table table-bordered">
                <tbody>
                    
                    <tr>
                        <th>Name of Principal</th>
                        <td>{{ $coach->school->principal_name }}</td>
                    </tr>
          
                    <tr>
                        <th>Principal Email</th>
                        <td>{{$coach->school->principal_email}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between w-100">
                <h3>School Gym Information</h3>
                    {{-- {{dd($coach) }} --}}
            </div>
        </div>
        <div class="card-body">

            <table class="table table-bordered">
                <tbody>
                    
                    <tr>
                        <th>Does your school have a gymnasium</th>
                        <td>{{ $coach->school->school_have_gym }}</td>
                    </tr>
          
                    <tr>
                        <th>First Name</th>
                        <td>{{$coach->school->f_name}}</td>
                    </tr>

                    <tr>
                        <th>Last Name</th>
                        <td>{{$coach->school->l_name}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between w-100">
                <h3>School Details</h3>
                    {{-- {{dd($coach) }} --}}
            </div>
        </div>
        <div class="card-body">

            <h5>Based on the time teams can leave for away games</h5>
            <table class="table table-bordered">
                <tbody>
                    
                    <tr>
                        <th>Monday</th>
                        <td>{{ $coach->school->monday }} dismissal</td>
                        

                    </tr>

                    <tr>
                        <th>Tuesday</th>
                        <td>{{ $coach->school->tuesday }} dismissal</td>

                    </tr>

                    <tr>
                        <th>Wednesday</th>
                        <td>{{ $coach->school->wednesday }} dismissal</td>

                    </tr>

                    <tr>
                        <th>Thursday</th>
                        <td>{{ $coach->school->thursday }} dismissal</td>

                    </tr>
                    <tr>
                        <th>Friday</th>
                        <td>{{ $coach->school->friday }} dismissal</td>

                    </tr>
                    <tr>
                        <th>Saturday</th>
                        <td>{{ $coach->school->saturday }} dismissal</td>

                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.dashboard>
