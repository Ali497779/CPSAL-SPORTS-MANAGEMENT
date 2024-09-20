<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\School;
use Illuminate\Http\Request;
use App\Services\UserService;
use App\Services\CoachService;
use App\Services\SchoolService;
use App\Http\Requests\LoginRequest;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use App\Http\Requests\SchoolRequest;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\ProfileRequest;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\CoachStoreRequest;

class AuthenticateController extends Controller
{
    public function login(): View
    {
        return view('auth.login');
    }

    public function check(LoginRequest $request): RedirectResponse
    {
        if (auth()->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            if (auth()->user()->is_verified) {
                if (auth()->user()->hasRole('admin')) {
                    return to_route('admin.dashboard');
                }

                return to_route('coach.dashboard');
            }

            return to_route('auth.login')->with('message', 'Your account is not verified');
        }

        return back()->with('message', 'Invalid login credencials');
    }

    public function register(): View
    {
        return view('auth.register');
    }
    
    public function signup(Request $request): RedirectResponse
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


        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar')->store('avatar','public');
        }
        $coach = new User();
        $coach->email = $request->email;
        $coach->username = $request->username;
        $coach->coach_age = $request->coach_age;
        $coach->avatar = $avatar;
        $coach->coach_experience = $request->coach_experience;
        $coach->coach_nationality = $request->coach_nationality;
        $coach->coach_past_team = $request->coach_past_team;
        $coach->password = Hash::make($request->password);
        $coach->save();
        $coach->assignRole(2);
        
        

        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('school-image','public');
        }
        $school = new School();
        $school->coach_id = $coach->id;
        $school->name = $request->name;
        $school->image = $image;
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


        return to_route('auth.login')->with('message', 'Account created successfully');
    }

    public function logout(): RedirectResponse
    {
        auth()->logout();

        return to_route('auth.login');
    }

    public function profileShow(): View
    {
        return view('auth.profile.show');
    }

    public function profileEdit(): View
    {
        return view('auth.profile.edit');

    }

    public function profileUpdate(ProfileRequest $request, UserService $service): RedirectResponse
    {
        $service->profileEdit($request);

        return to_route('auth.profile.show')->with('message', 'Profile updated successfully');
    }
}
