<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCollegeRequest;
use App\Http\Requests\UpdateCollegeRequest;
use Illuminate\Http\Request;
use App\Models\College;

class CollegeController extends Controller
{
    /**
     * List all colleges.
     */
    public function index()
    {
        $colleges = College::all();
        return view('colleges.index', compact('colleges'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('colleges.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCollegeRequest $request)
    {
        College::create($request->validated());
        return redirect()->route('colleges.index')->with('success', 'College created successfully!');
    }


    public function show(string $id)
    {
        $collegeToShow = College::findOrFail($id);
        return view('colleges.show', compact('collegeToShow'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $collegeToEdit = College::findOrFail($id);
        return view('colleges.edit', compact('collegeToEdit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCollegeRequest $request, string $id)
    {
        $collegeToUpdate = College::findOrFail($id);

        // Handle the case where fields are left empty and pass null for empty fields
        $data = $request->validated(); // Automatically handles the nullable and required rules

        // Update the college record
        $collegeToUpdate->update($data);

        return redirect()->route('colleges.index')->with('success', 'College updated successfully!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $collegeToDestroy = College::findOrFail($id);
        $collegeToDestroy->delete();
        return redirect()->route('colleges.index')->with('success', 'College deleted successfully.');
    }
}
