<x-layouts.dashboard title="School Detail">
    <div class="d-flex justify-content-end w-100">
        @if (is_null($school))
            <a href="{{ route('coach.school.create') }}" style="margin:5px 0;" class="btn btn-primary"><i
                    class="fa fa-plus"></i> Add</a>
        @else
            <a href="{{ route('coach.school.edit',$school->id) }}" style="margin:5px 0;" class="btn btn-success"><i
                class="fa fa-edit"></i> Edit</a>
        @endif
    </div>
<div class="card">
<div class="card-header">
    <div class="d-flex justify-content-between w-100">
        <h3>School Detail</h3>

    </div>
</div>
<div class="card-body">
    <table class="table table-bordered">
        @if (isset($school))
        
            <tbody>
                <tr>
                    <th>Name</th>
                    <td>{{ $school->name }}</td>
                </tr> 
                <tr>
                    <th>Image</th>
                    <td>
                        
                        <img src="{{ asset('assets/school/'.$school->image) }}" class="img-fluid" height="150px" width="150px" alt="School image">
                    </td>
                </tr>
                <tr>
                    <th>Address</th>
                    <td>{{ $school->address }}</td>
                </tr>
                <tr>
                    <th>Phone</th>
                    <td>{{ $school->phone }}</td>
                </tr>
                <tr>
                    <th>Fax</th>
                    <td>{{ $school->fax }}</td>
                </tr>
                <tr>
                    <th>Principal name</th>
                    <td>{{ $school->principal_name }}</td>
                </tr>
                <tr>
                    <th>Principal phone</th>
                    <td>{{ $school->principal_phone }}</td>
                </tr>
                <tr>
                    <th>Principal email</th>
                    <td>{{ $school->principal_email }}</td>
                </tr>
                <tr>
                    <th>Director name</th>
                    <td>{{ $school->director_name }}</td>
                </tr>
                <tr>
                    <th>Director phone</th>
                    <td>{{ $school->director_phone }}</td>
                </tr>
                <tr>
                    <th>Director email</th>
                    <td>{{ $school->director_email }}</td>
                </tr>
            </tbody>
        @else
            <div class="text-center text-danger">No school added yet!</div>
        @endif
    </table>
</div>
</div>
</x-layouts.dashboard>
