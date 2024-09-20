<?php

namespace App\Services;

use App\Models\School;
use Illuminate\Support\Facades\Storage;

class SchoolService
{
    public function store($request): void
    {
        $image = $request->image->store('schools', 'public');
        School::create($request->except('image') + ['image' => $image]);
    }

    public function update($school, $request): void
    {
        $image = $school->image;
        if ($request->image) {
            $file2 = $request->file('image');
        $extension2 = $file2->getClientOriginalExtension();
    $filename2 = hash('sha256', time() . $file2->getClientOriginalName()) . '.' . $extension2;
    $picture2 = $request->image->move(public_path('assets/school'), $filename2);
    $school->image = $filename2;
        }
        $school->update($request->except('image') + ['image' => $filename2]);
    }

    public function storeWithCoach($request, $userId): void
    {
        $image = $request->image->store('schools', 'public');
        School::create($request->except(['image', 'coach_id']) + ['image' => $image, 'coach_id' => $userId]);
    }
}
