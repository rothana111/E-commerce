<!DOCTYPE html>
<html>
<head>
    <title>Students</title>

    <style>
        body {
            margin: 0;
            font-family: Arial;
            background: #f3f4f6;
        }

        .topnav {
            background: #111827;
            padding: 12px 20px;
            display: flex;
            gap: 12px;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .topnav a {
            text-decoration: none;
            color: #e5e7eb;
            padding: 8px 12px;
            border-radius: 6px;
            font-size: 14px;
        }

        .topnav a:hover {
            background: #1f2937;
            color: white;
        }

        .page {
            padding: 20px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .nav a {
            display: inline-block;
            padding: 10px 14px;
            margin-right: 8px;
            background: #374151;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-size: 14px;
        }

        .nav a:hover {
            opacity: 0.9;
        }

        .box {
            background: white;
            padding: 15px;
            margin-bottom: 12px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.08);
        }

        .s-edit {
            color: rgb(16, 160, 59);
            text-decoration: none;
            margin-right: 5px;
        }

        .s-delete {
            color: red;
            text-decoration: none;
        }

        .class {
            color: #666;
            font-size: 13px;
        }
        .action:not(:last-child)::after {
            content: " | ";
            color: #5e5d5d;
            margin: 0 5px;
        }
    </style>
</head>

<body>


<div class="topnav">
    <a href="/">Welcome</a>
    <a href="/students">Students</a>
    <a href="/classrooms">Classrooms</a>
    
</div>

<div class="page">

<h2>Students</h2>

<div class="nav">
    <a href="/students/create">+ Add Student</a>
</div>

<hr>

@foreach($students as $student)
    <div class="box">
        <strong>{{ $student->name }}</strong> - {{ $student->age }}

        <div class="class">
            {{ $student->classroom->name }}
        </div>

        <br>

        <a class="action s-edit" href="/students/edit/{{ $student->id }}">Edit</a>
        <a class="action s-delete" href="/students/delete/{{ $student->id }}">Delete</a>
    </div>
@endforeach

</div>

</body>
</html>