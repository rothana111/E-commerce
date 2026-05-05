<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'course' => 'required',
        'age' => 'required|integer|min:15|max:120',
    ]);

    Student::create($request->all());

    return redirect('/students');
    }

    public function edit($id)
    {
        $student = Student::findOrFail($id);
        return view('students.edit', compact('student'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'course' => 'required',
        'age' => 'required|integer|min:15|max:120',
    ]);

    $student = Student::findOrFail($id);
    $student->update($request->all());

    return redirect('/students');
    }

    public function destroy($id)
    {
        Student::findOrFail($id)->delete();
        return redirect('/students');
    }
}
