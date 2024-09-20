<?php

namespace App\Http\Controllers\Admin;

use App\Models\Team;
use App\Models\User;
use App\Models\School;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Services\CoachService;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\CoachStoreRequest;
use App\Http\Requests\CoachUpdateRequest;

    class CoachController extends Controller
{
    public function index(): View
    {
        return view('admin.coach.list', [
            'coaches' => User::excludeAdmins()->with('school')->get(),
        ]);
    }

    public function create(): View
    {
        return view('admin.coach.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'avatar' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'email' => 'required|email|unique:users',
            'username' => 'required|string',
            'password' => 'required|string|min:8|confirmed',
            'name' => 'required|string',
            'school_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'address' => 'required|string',
            'phone' => 'required|string',
            'fax' => 'required|string',
            'principal_name' => 'required|string',
            'principal_phone' => 'required|string',
            'principal_email' => 'required|email',
            'director_name' => 'required|string',
            'director_phone' => 'required|string',
            'director_email' => 'required|email',
            'coach_age' => 'required|integer',
            'coach_experience' => 'required|integer',
            'coach_nationality' => 'required|string',
            'coach_past_team' => 'required|string',
            'athletic_assitant_name' => 'required|string',
            'athletic_assitant_position' => 'required|string',
            'athletic_assitant_email' => 'required|email',
            'athletic_assitant_cell' => 'required|string',
            'athletic_assitant_homephone' => 'required|string',
            'gymnasium_address' => 'required|string',
            'school_have_gym' => 'required|string',
            'f_name' => 'required|string',
            'l_name' => 'required|string',
            'monday' => 'required|string',
            'tuesday' => 'required|string',
            'wednesday' => 'required|string',
            'thursday' => 'required|string',
            'friday' => 'required|string',
            'saturday' => 'required|string',
        ]);



        $request->validate([
            'avatar' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'email' => 'required|email|unique:users',
            'username' => 'required|string',
            'coach_age' => 'required|integer',
            'coach_experience' => 'required|integer',
            'coach_nationality' => 'required|string',
            'coach_past_team' => 'required|string',
            'password' => 'required|string|min:8|confirmed',
            'name' => 'required|string',
            'address' => 'required|string',
        ]);


        $file = $request->file('avatar');
        $extension = $file->getClientOriginalExtension();
        $filename = hash('sha256', time() . $file->getClientOriginalName()) . '.' . $extension;
        $picture = $request->avatar->move(public_path('assets/coach'), $filename);

        $coach = new User();
        $coach->email = $request->email;
        $coach->username = $request->username;
        $coach->coach_age = $request->coach_age;
        $coach->avatar = $filename;
        $coach->coach_experience = $request->coach_experience;
        $coach->coach_nationality = $request->coach_nationality;
        $coach->coach_past_team = $request->coach_past_team;
        $coach->password = Hash::make($request->password);
        $coach->assignRole(2);
       
        $coach->save();
       
        $file2 = $request->file('image');
        $extension2 = $file2->getClientOriginalExtension();
        $filename2 = hash('sha256', time() . $file2->getClientOriginalName()) . '.' . $extension2;
        $picture2 = $request->image->move(public_path('assets/school'), $filename2);

        


        $school = new School();
        $school->coach_id = $coach->id;
        $school->name = $request->name;
        $school->image = $filename2;
        $school->address = $request->address;
        $school->phone = $request->phone;
        $school->fax = $request->fax;
        $school->principal_name = $request->principal_name;
        $school->principal_phone = $request->principal_phone;
        $school->principal_email = $request->principal_email;
        $school->director_name = $request->director_name;
        $school->director_phone = $request->director_phone;
        $school->director_email = $request->director_email;
        $school->athletic_assitant_name = $request->athletic_assitant_name;
        $school->athletic_assitant_position = $request->athletic_assitant_position;
        $school->athletic_assitant_email = $request->athletic_assitant_email;
        $school->athletic_assitant_cell = $request->athletic_assitant_cell;
        $school->athletic_assitant_homephone = $request->athletic_assitant_homephone;
        $school->gymnasium_address = $request->gymnasium_address;
        $school->school_have_gym = $request->school_have_gym;
        $school->f_name = $request->f_name;
        $school->l_name = $request->l_name;
        $school->monday = $request->monday;
        $school->tuesday = $request->tuesday;
        $school->wednesday = $request->wednesday;
        $school->thursday = $request->thursday;
        $school->friday = $request->friday;
        $school->saturday = $request->saturday;

        $school->save();

        

      
    
        return to_route('admin.coaches.index')->with('message', 'Coach created successfully');
        
    }

    public function show(User $coach): View
    {
        return view('admin.coach.profile', [
            'coach' => $coach->load('school'),
            'teams' => Team::where('coach_id', $coach->id)->with(['sport', 'players'])->latest()->get(),
        ]);
    }

    public function edit(User $coach): View
    {
        return view('admin.coach.edit', [
            'coach' => $coach->load('school'),

        ]);
    }

    public function update(Request $request,User $coach,School $school): RedirectResponse
    {
        // dd($request);
        $coach->update([
            'email' => $request->email,
        'username' => $request->username,
    'coach_age' => $request->coach_age,
    'avatar' => $request->avatar,
    'coach_experience' => $request->coach_experience,
    'coach_nationality' => $request->coach_nationality,
    'coach_past_team' => $request->coach_past_team,
    'password' => Hash::make($request->password),
            
        ]);
        // if ($request->hasFile('avatar')) {
        //     $avatar = $request->file('avatar')->store('avatar','public');
        // }
        // if ($request->hasFile('image')) {
        //     $image = $request->file('image')->store('school-image','public');
        // }
        
        
        $school->update([
        'name' => $request->name,
        'image' => $request->image,
        'address' => $request->address,
        'phone' => $request->phone,
        'fax' => $request->fax,
        'principal_name' =>$request->principal_name,
        'principal_phone' => $request->principal_phone,
        'principal_email' => $request->principal_email,
        'director_name' => $request->director_name,
        'director_phone' =>$request->director_phone,
        'director_email' =>$request->director_email,
        'athletic_assitant_name' => $request->athletic_assitant_name,
        'athletic_assitant_position' => $request->athletic_assitant_position,
        'athletic_assitant_email' => $request->athletic_assitant_email,
        'athletic_assitant_cell' => $request->athletic_assitant_cell,
        'athletic_assitant_homephone' => $request->athletic_assitant_homephone,
        'gymnasium_address' => $request->gymnasium_address,
        'school_have_gym '=> $request->school_have_gym,
        'f_name' => $request->f_name,
        'l_name' => $request->l_name,
        'monday' => $request->monday,
        'tuesday' => $request->tuesday,
        'wednesday' => $request->wednesday,
        'thursday' => $request->thursday,
        'friday' => $request->friday,
        'saturday' => $request->saturday,
        ]);

        return to_route('admin.coaches.index')->with('message', 'Profile updated successfully');
    }

    public function destroy(User $coach): RedirectResponse
    {
        $coach->delete();

        return back()->with('message', 'Coach deleted successfully');
    }

    public function getForCoach(Request $request): JsonResponse
    {
        $coach_ids = Team::where('sport_id', $request->sport_id)->pluck('coach_id');

        return response()->json([
            // 'teams' => User::coaches()->whereNotIn('id', $coach_ids)->orderBy('username')->get(),
            'teams' => User::coaches()->orderBy('username')->get(),
        ]);
    }

    public function verifyCoach(User $coach): RedirectResponse
    {
        $coach->update([
            'is_verified' => 1,
        ]);

        return back()->with('message', 'Coach verified successfully');
    }

    public function blockCoach(User $coach): RedirectResponse
    {
        $coach->update([
            'is_verified' => 0,
        ]);

        return back()->with('message', 'Coach blocked successfully');
    }
}
