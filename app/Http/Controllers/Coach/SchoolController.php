<?php

namespace App\Http\Controllers\Coach;

use App\Http\Controllers\Controller;
use App\Http\Requests\SchoolRequest;
use App\Models\School;
use App\Services\SchoolService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class SchoolController extends Controller
{
    public function index(): View
    {
        return view('coach.school.index', [
            'school' => School::where('coach_id', auth()->id())->first(),
        ]);
    }

    public function create(): View
    {
        return view('coach.school.create');
    }

    public function store(SchoolRequest $request, SchoolService $service): RedirectResponse
    {
        $service->store($request);

        return to_route('coach.school.index')->with('message', 'School created successfully');
    }

    public function edit(School $school): View
    {
        return view('coach.school.edit', [
           
            'school' => $school,
        ]);
    }

    public function update(SchoolRequest $request, School $school, SchoolService $service): RedirectResponse
    {
        
        
        $service->update($school, $request);

        return to_route('coach.school.index')->with('message', 'School updated successfully');

    }
}
