<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>

    <style>
        
        body {
            font-family: Arial;
            background: #eef;
            padding: 20px;
        }

        form {
            background: white;
            padding: 45px;
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
            background: green;
            color: white;
            padding: 10px;
            width: 320px;
            border-radius: 4px;
            border: none;
        }
    </style>
</head>

<body>
<a href="/students" style="display:inline-block; margin-bottom:10px; color:blue;">
    ← Back to Students List
</a>

<h2 style="text-align:center;">Add Student</h2>

<form method="POST" action="/students">
    @csrf

    <input type="text" name="name" placeholder="Name">
    <input type="email" name="email" placeholder="Email">
    <input type="text" name="course" placeholder="Course">
    <input type="number" name="age" min="15" max="120"  placeholder="Age">

    <button type="submit">Save</button>
</form>


</body>
</html>