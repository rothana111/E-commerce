<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student; 

class StudentController extends Controller
{
    
    // CREATE
    public function createStudents()
    {
        if (Student::count() == 0) {
            Student::create(['name' => 'Ian', 'age' => 26 , 'email' => 'ian@gmail.com']);
            Student::create(['name' => 'Nochu', 'age' => 21, 'email' => 'nochu@gmail.com']);
            Student::create(['name' => 'Koo', 'age' => 17, 'email' => 'koo@gmail.com']);
            return "Students added";
        } else {
            return "Students already exist";
        }
    }


    // READ
    public function show()
    {
        $students = Student::all();
        return view('students', compact('students'));
    }

    // UPDATE
    public function update($id)
    {
        $student = Student::find($id); 

        $student->name="Update Student"; 
        $student->save(); 
        
        return "Student Updated" ;
    }

    // DELETE
    public function delete($id)
    {
        Student::destroy($id);  // exactly like the slide
        return redirect('/students');
    }
}