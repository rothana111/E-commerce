<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>

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
        width: 350px;
        background: white;
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 6px 20px rgba(0,0,0,0.1);
        text-align: center;
    }

    h2 {
        margin-bottom: 20px;
    }

    input{
        width: 94%;
        padding: 10px;
        margin-bottom: 12px;
        border: 1px solid #ddd;
        border-radius: 8px;
    }
    select {
        width: 100%;
        padding: 10px;
        margin-bottom: 12px;
        border: 1px solid #ddd;
        border-radius: 8px;
    }
    button {
        width: 100%;
        padding: 10px;
        background: #5a67d8;
        color: white;
        border: none;
        border-radius: 8px;
        cursor: pointer;
    }

    a {
        display: block;
        margin-top: 10px;
        font-size: 14px;
        color: #555555;
        text-decoration: none;
    }
</style>
</head>

<body>

<div class="card">
    <h2>Add Student</h2>

    <form method="POST" action="/students/store">
        @csrf

        <input name="name" placeholder="Name">
        <input name="age" placeholder="Age">

        <select name="classroom_id">
            @foreach($classrooms as $class)
                <option value="{{ $class->id }}">{{ $class->name }}</option>
            @endforeach
        </select>

        <button type="submit">Save</button>
    </form>

    <a href="/students">← Back</a>
</div>

</body>
</html>