<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            ['id'=>1, 'name'=>'Alice'],
            ['id'=>2, 'name'=>'Bob'],
        ];

        return view('admin.users', compact('users'));
    }
}