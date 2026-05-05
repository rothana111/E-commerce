<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Classroom;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::with('classroom')->get();
        return view('students.index', compact('students'));
    }

    public function create()
    {
        $classrooms = Classroom::all();
        return view('students.create', compact('classrooms'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'age' => 'required',
            'classroom_id' => 'required',
        ]);

        Student::create([
            'name' => $request->name,
            'age' => $request->age,
            'classroom_id' => $request->classroom_id,
        ]);

        return redirect('/students');
    }

    public function edit($id)
    {
        $student = Student::find($id);
        $classrooms = Classroom::all();

        return view('students.edit', compact('student', 'classrooms'));
    }

    public function update(Request $request, $id)
    {
        $student = Student::find($id);

        $student->update([
            'name' => $request->name,
            'age' => $request->age,
            'classroom_id' => $request->classroom_id,
        ]);

        return redirect('/students');
    }

    public function delete($id)
    {
        Student::destroy($id);
        return redirect('/students');
    }
}