<style>
     .back {
        display: inline-block;
        margin-bottom: 10px;
        padding: 7px 11px;
        background: #374151;
        border: 1px solid #374151;
        color: white;
        border-radius: 6px;
        text-decoration: none;
    }

    .back:hover {
        background: #edf1f7;
        color: rgb(240, 60, 10);
    }
</style>

@extends('layouts.app')  

@section('content')    

<a class="back" href="/">← Back to Welcome</a>
    <h2>Student List</h2>

    <ul>
        @foreach($students as $student)
            <li>
                Name: {{ $student['name'] }} |
                Age: {{ $student['age'] }}
            </li>
        @endforeach
    </ul>

@endsection