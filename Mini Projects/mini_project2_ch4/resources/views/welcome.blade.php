<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #22364a;
            text-align: center;
        }

        .box {
            margin-top: 18%;
        }

        h1 {
            font-size: 32px;
            color: #ffffff;
            margin-bottom: 5px;
        }

        p {
            color: #d5d7dc;
            font-size: 14px;
            margin-bottom: 20px;
        }

        a {
            display: inline-block;
            margin: 5px;
            padding: 8px 14px;
            text-decoration: none;
            color: white;
            background: #677892;
            border-radius: 6px;
            font-size: 13px;
        }

        a:hover {
            opacity: 0.85;
        }

        footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            text-align: center;
            font-size: 12px;
            color: #9ca3af;
            padding: 10px;
        }
    </style>
</head>

<body>

<div class="box">
    <h1>Welcome to the Admin Panel</h1>
    <p>Manage your application settings and users from here.</p>

    <a href="/admin">Admin</a>
    <a href="/admin/users">Users</a>
    <a href="/admin/settings">Settings</a>
</div>

<footer>
    © mini project 2 - admin system
</footer>

</body>
</html>