<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
      public function index()
    {
        $students = [
            ['name' => 'Alice', 'age' => 20],
            ['name' => 'Bob', 'age' => 22],
            ['name' => 'Charlie', 'age' => 21],
        ];
        return view('students', ['students' => $students] );

    }
}
