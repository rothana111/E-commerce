<!DOCTYPE html>
<html>
<head>
    <title>Classrooms</title>

    <style>
        body {
            margin: 0;
            font-family: Arial;
            background: #f3f4f6;
        }

        .topnav {
            background: #f3f4f6;
            padding: 10px 15px;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: none;
            border: none;
        }

        .topnav a {
            text-decoration: none;
            color: #333;
            margin-right: 10px;
            padding: 6px 10px;
            border-radius: 6px;
            font-size: 14px;
            transition: color 0.2s ease;
        }

        .topnav a:hover {
            color: #2563eb;
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
            margin-right: 8px;
            text-decoration: none;
            font-size: 14px;
        }

        .nav a:hover {
            opacity: 0.9;
        }
        .add-student {
            background: #213556;
            color: white;
            padding: 10px 14px;
            border-radius: 8px;
            text-decoration: none;
        }

        .add-class {
            background: #265ac9;
            color: white;
            padding: 10px 14px;
            border-radius: 8px;
            text-decoration: none;
        }

        .add-student:hover,
        .add-class:hover {
            opacity: 0.85;
        }
        

        .card {
            background: white;
            padding: 15px;
            margin-bottom: 15px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.08);
        }

        .title {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .c-edit {
            background: #2563eb;
            color: white;
            padding: 5px 10px;
            border-radius: 6px;
            text-decoration: none;
            font-size: 13px;
        }

        .c-delete {
            background: #111827;
            color: white;
            padding: 5px 10px;
            border-radius: 6px;
            text-decoration: none;
            font-size: 13px;
        }

        p {
            margin-left: 10px;
            color: #555;
        }

        .s-edit {
            color: rgb(16, 160, 59);
            text-decoration: none;
            margin-left: 10px;
            margin-right: 5px;
        }

        .s-delete {
            color: red;
            text-decoration: none;
        }
        .action:not(:last-child)::after {
            content: " | ";
            color: #777575;
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
    <h2>Classrooms</h2>
    <div class="nav">
        <a class="add-student" href="/students/create">+ Add Student</a>
        <a class="add-class" href="/classrooms/create">+ Add Class</a>
    </div>
    <hr>

    @foreach($classrooms as $class)
        <div class="card">
            <div class="title">
                <h3>{{ $class->name }}</h3>
                <div>
                    <a class="c-edit" href="/classrooms/edit/{{ $class->id }}">Edit</a>
                    <a class="c-delete" href="/classrooms/delete/{{ $class->id }}">Delete</a>
                </div>
            </div>

    @foreach($class->students as $student)
        <p>
            {{ $student->name }} - {{ $student->age }}
            <a class="action s-edit" href="/students/edit/{{ $student->id }}">Edit </a>
            <a class="action s-delete" href="/students/delete/{{ $student->id }}">Delete</a>
        </p>
            @endforeach
        </div>
@endforeach

</div>

</body>
</html>