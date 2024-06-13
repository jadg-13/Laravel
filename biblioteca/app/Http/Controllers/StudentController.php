<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        try {
            $students = Student::all();
            return view('students.index', compact('students'));
        } catch (\Exception $e) {
            return view('welcome');
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        try {
            return view('students.create');
        } catch (\Exception $e) {
            return redirect()->route('students.index');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        try {
            $student = new Student();
            $student->cif = $request->cif;
            $student->name = $request->name;
            $student->last_name = $request->last_name;
            $student->email = $request->email;
            $student->phone = $request->phone;
            $student->save();
            return redirect()->route('students.index')->with('success', 'Student created successfully.');
        } catch (\Exception $e) {
            return redirect()->route('students.index');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        try {
            $student = Student::find($id);
            return view('students.show', compact('student'));
        } catch (\Exception $e) {
            return redirect()->route('students.index');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        try {
            $student = Student::find($id);
            return view('students.edit', compact('student'));
        } catch (\Exception $e) {
            return redirect()->route('students.index');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        try {
            $student = Student::find($id);
            $student->cif = $request->cif;
            $student->name = $request->name;
            $student->last_name = $request->last_name;
            $student->email = $request->email;
            $student->phone = $request->phone;
            $student->save();
            return redirect()->route('students.index');
        } catch (\Exception $e) {
            return redirect()->route('students.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        try {
            $student = Student::find($id);
            $student->delete();
            return redirect()->route('students.index');
        } catch (\Exception $e) {
            return redirect()->route('students.index');
        }
    }
}
