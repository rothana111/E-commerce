<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: rgb(207, 207, 227);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .card {
            background: rgb(252, 246, 246);
            padding: 40px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            width: 300px;
        }

        h1 {
            margin-bottom: 10px;
        }

        p {
            color: #666;
            margin-bottom: 20px;
        }
        small {
            color: #999;
            display: block;
            margin-bottom: 10px;
        }
        a {
            display: inline-block;
            padding: 10px 15px;
            background: #2872a7;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        a:hover {
            background: #3367b1;
        }
    </style>
</head>

<body>

<div class="card">
    <h1>Welcome👋</h1>
    <p>Student Management System </p>
    <small>This is in chapter 7</small><br>

    <a href="/students">Go to Students</a>
</div>

</body>
</html>