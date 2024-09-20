<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SportRequest;
use App\Models\Sport;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class SportAttributeController extends Controller
{
    public function index(): View
    {
        return view('sport.list', [
            'sports' => Sport::latest()->paginate(10),
        ]);
    }

    public function create(): View
    {
        return view('sport.create');
    }

    public function store(SportRequest $request): RedirectResponse
    {
        Sport::create($request->validated());

        return to_route('admin.sport.index')->with('message', 'Sport created successfully');
    }

    public function show(Sport $sport): View
    {
        return view('sport.show', [
            'sport' => $sport,
        ]);
    }

    public function edit(Sport $sport): View
    {
        return view('sport.edit', [
            'sport' => $sport,
        ]);
    }

    public function update(SportRequest $request, Sport $sport): RedirectResponse
    {
        $sport->update($request->validated());

        return to_route('admin.sport.index')->with('message', 'Sport updated successfully');
    }

    public function destroy(Sport $sport): RedirectResponse
    {
        $sport->delete();

        return back()->with('message', 'Sport deleted successfully');
    }
}
