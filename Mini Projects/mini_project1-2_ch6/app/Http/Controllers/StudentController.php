<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function index()
    {
        // 1. Create data (array of students)
        $students = [
            ['name' => 'jiarui', 'age' => 28],
            ['name' => 'zhangchi', 'age' => 24],
            ['name' => 'yilei', 'age' => 28],
        ];

        // 2. Send data to view
        return view('students', compact('students'));
    }
}
