<!DOCTYPE html>
<html>
<head>
    <title>Add Class</title>

    <style>
        body {
            margin: 0;
            font-family: Arial;
            background: #eef2f3;
        }

        .container {
            height: 90vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        form {
            background: white;
            padding: 30px;
            border-radius: 12px;
            width: 300px;
            text-align: center;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        input {
            width: 92%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 6px;
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

        h2 {
            margin-bottom: 15px;
        }

        .back {
            display: block;
            margin-top: 10px;
            margin-right: 17px;
            font-size: 13px;
            color: #555;
            text-decoration: none;
        }
    </style>
</head>

<body>

<div class="container">

<form method="POST" action="/classrooms/store">
@csrf

<h2>Add Class</h2>

<input name="name" placeholder="Class name">

<button type="submit">Save</button>

<a class="back" href="/classrooms">← Back</a>

</form>

</div>

</body>
</html>