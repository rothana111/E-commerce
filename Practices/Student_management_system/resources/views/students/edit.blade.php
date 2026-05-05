<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>

    <style>
        body {
            font-family: Arial;
            background: #eef;
            padding: 20px;
        }

        form {
            background: white;
            padding: 40px;
            width: 300px;
            margin: auto;
            border-radius: 10px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
        }

        button {
            background: rgb(20, 77, 223);
            color: white;
            padding: 10px;
            margin-left: ;
            width: 320px;
            border-radius: 4px;
            border: none;
        }
        

    </style>
</head>

<body>
<a href="/students" style="display:inline-block; margin-bottom:10px; color:blue;">
    ← Back to list
</a>
<h2 style="text-align:center;">Edit Student</h2>

<form method="POST" action="/students/{{ $student->id }}">
    @csrf
    @method('PUT')

    <input type="text" name="name" value="{{ $student->name }}">
    <input type="email" name="email" value="{{ $student->email }}">
    <input type="text" name="course" value="{{ $student->course }}">
    <input type="number" name="age" value="{{ $student->age }}"  min="15" max="120" >

    <button type="submit">Update</button>
</form>

</body>
</html>