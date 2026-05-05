<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #eef2f7;
            text-align: center;
        }

        .box {
            margin-top: 18%;
        }

        h1 {
            font-size: 32px;
            color: #111827;
            margin-bottom: 8px;
        }

        p {
            color: #6b7280;
            font-size: 14px;
            margin-bottom: 20px;
        }

        a {
            display: inline-block;
            margin: 6px;
            padding: 15px 22px;
            background: #374151;
            color: white;
            text-decoration: none;
            border-radius: 6px;
            font-size: 13px;
        }

        a:hover {
            color: #111827;
            background: #edf1f7;
            border: 1px solid #111827;
        }

        footer {
            position: fixed;
            bottom: 10px;
            width: 100%;
            text-align: center;
            font-size: 12px;
            color: #9ca3af;
        }
    </style>
</head>

<body>

<div class="box">
    <h1>Welcome To Dashboard</h1>
    <p>Laravel Mini Project Practice </p>

    <a href="/students">Students</a>
    <a href="/blog">The Blog</a>
</div>

<footer>
    © mini project in chapter 6 
</footer>

</body>
</html>