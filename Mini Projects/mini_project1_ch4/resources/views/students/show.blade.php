<!DOCTYPE html>
<html>
<head>
    <title>Student Info</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f0f0f0;
            margin: 20px;
        }

        h1 {
            color: #111827;
        }

        .box {
            background: white;
            padding: 15px;
            border-radius: 6px;
            width: 300px;
        }

        p {
            color: #374151;
        }

        a {
            display: inline-block;
            margin-top: 10px;
            text-decoration: none;
            color: #2563eb;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

<h1>Student Info</h1>

<div class="box">
    <p>Name: {{ $student['name'] }}</p>
    <p>Age: {{ $student['age'] }}</p>

    <a href="{{ route('students.index') }}">Back</a>
</div>

</body>
</html>