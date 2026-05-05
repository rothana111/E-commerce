<!DOCTYPE html>
<html>
<head>
    <title>Students</title>
</head>
<body>
    <a href="/"> ↪ back to Welcome</a>
    <h1>Student List</h1>

    <ul>
        @foreach($students as $student)
            <li>{{ $student }}</li>
        @endforeach
    </ul>

</body>
</html>
