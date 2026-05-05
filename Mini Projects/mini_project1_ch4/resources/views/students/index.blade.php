<!DOCTYPE html>
<html>
<head>
    <title>Students List</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f0f0f0;
            margin: 20px;
        }

        h1 {
            color: #111827;
        }
        h1 a {
            text-decoration: none;
            color: #111827;
        }
        h1 a:hover {
            text-decoration: none;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li {
            background: white;
            margin-bottom: 8px;
            padding: 10px;
            border-radius: 6px;
        }

        a {
            text-decoration: none;
            color: #2563eb;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

<h1><a href="/">Students List</a></h1>

<ul>
@foreach ($students as $id => $student)
    <li>
        <a href="{{ route('students.show', $id) }}">
            {{ $student['name'] }}
        </a>
    </li>
@endforeach
</ul>

</body>
</html>