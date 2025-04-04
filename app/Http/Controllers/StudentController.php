<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use App\Models\Student;
use App\Models\College;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $colleges = College::orderBy('name')->pluck('name', 'id')->prepend('All Colleges', '');

        if (!request('college_id')) {
            $students = Student::all();
        } else {
            $students = Student::where('college_id', request('college_id'))->get();
        }

        return view('students.index', compact('students', 'colleges'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $colleges = College::all();
        return view('students.create', compact('colleges'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStudentRequest $request)
    {
        Student::create($request->validated());
        return redirect()->route('students.index')->with('success', 'Student added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $studentToShow = Student::findOrFail($id);
        $college = College::find($studentToShow->college_id);
        return view('students.show', compact(['studentToShow', 'college']));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $studentToEdit = Student::findOrFail($id);
        $colleges = College::all();
        return view('students.edit', compact('studentToEdit', 'colleges'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStudentRequest $request, string $id)
    {
        $studentToUpdate = Student::findOrFail($id);
        $data = $request->validated();

        $data['name'] ??= $studentToUpdate->name;
        $data['email'] ??= $collegeToUpdate->email;
        $data['phone'] ??= $studentToUpdate->phone;
        $data['dob'] ??= $studentToUpdate->dob;
        $data['college_id'] ??= $studentToUpdate->college_id;

        $studentToUpdate->update($data);

        return redirect()->route('students.index')->with('success', 'Student updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $studentToDelete = Student::findOrFail($id);
        $studentToDelete->delete();

        return redirect()->route('students.index')->with('success', 'Student deleted successfully!');
    }
}
