<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    public function index() {
    $blogs = [
        ['id' => 1, 'title' => 'First Blog', 'content' => 'Content 1'],
        ['id' => 2, 'title' => 'Second Blog', 'content' => 'Content 2'],
    ];
    return view('blog.index', compact('blogs'));
    }

    public function show($id) {
        $blog = ['id' => $id, 
        'title' => "Blog $id", 
        'content' => "Content $id"];
        return view('blog.show', compact('blog'));
    }
    
}
