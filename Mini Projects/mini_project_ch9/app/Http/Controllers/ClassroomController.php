<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use Illuminate\Http\Request;

class ClassroomController extends Controller
{
    public function index()
    {
        $classrooms = Classroom::with('students')->get();
        return view('classrooms.index', compact('classrooms'));
    }

    public function create()
    {
        return view('classrooms.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        Classroom::create($request->all());

        return redirect('/classrooms');
    }

    public function edit($id)
    {
        $classroom = Classroom::find($id);
        return view('classrooms.edit', compact('classroom'));
    }

    public function update(Request $request, $id)
    {
        $classroom = Classroom::find($id);
        $classroom->update($request->all());

        return redirect('/classrooms');
    }

    public function delete($id)
    {
        Classroom::destroy($id);
        return redirect('/classrooms');
    }
}