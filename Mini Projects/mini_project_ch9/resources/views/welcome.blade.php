<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>

    <style>
        body {
            margin: 0;
            height: 100vh;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #5f82db, #445192);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card {
            width: 360px;
            background: rgba(255,255,255,0.15);
            backdrop-filter: blur(10px);
            padding: 40px;
            border-radius: 20px;
            text-align: center;
            box-shadow: 0 8px 30px rgba(0,0,0,0.2);
            color: white;
        }

        h1 {
            margin-bottom: 10px;
            font-size: 38px;
        }

        p {
            margin-bottom: 30px;
            color: #f1f1f1;
        }

        .btn {
            display: block;
            text-decoration: none;
            padding: 14px;
            margin-top: 15px;
            border-radius: 12px;
            font-weight: bold;
            transition: 0.2s;
        }

        .student {
            background: #ffffff;
            color: #5a7cd8;
        }

        .admin {
            background: #1f2937;
            color: white;
        }

        .btn:hover {
            transform: scale(1.03);
        }
    </style>
</head>

<body>

<div class="card">
    <h1>Welcome</h1>
    <p>Select a system to continue</p>

    <a class="btn student" href="/students">Student System</a>
    <a class="btn admin" href="/classrooms">Admin System</a>
</div>

</body>
</html>