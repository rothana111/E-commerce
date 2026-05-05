<!DOCTYPE html>
<html>
<head>
    <title>Edit Class</title>

    <style>
        body {
            margin: 0;
            font-family: Arial;
            background: #eef2f3;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .card {
            width: 320px;
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 6px 15px rgba(0,0,0,0.1);
            text-align: center;
        }

        input {
            width: 93%;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 8px;
            border: 1px solid #ddd;
        }

       button {
            width: 100%;
            padding: 10px;
            background: #5a7cd8;
            color: white;
            border: none;
            border-radius: 8px;
        }
        button:hover {
            background: #4c6bbf;
        }

        a {
            display: block;
            margin-top: 10px;
            color: #555;
            text-decoration: none;
        }
        
    </style>
</head>

<body>

<div class="card">
    <h2>Edit Class</h2>

    <form method="POST" action="/classrooms/update/{{ $classroom->id }}">
        @csrf

        <input name="name" value="{{ $classroom->name }}">

        <button type="submit">Update</button>
    </form>

    <a href="/classrooms">← Back</a>
</div>

</body>
</html>