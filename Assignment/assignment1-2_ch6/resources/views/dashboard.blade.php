<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f0f0f0;
        }
        header {
            padding: 10px 15px;
        
        }

        header h2 {
            margin: 0;
            font-size: 22px;
            color: #111827;
        }
        i {
            margin-right: 6px;
        }

        .container {
            padding: 20px;
        }

        .box {
            background: white;
            padding: 15px;
            margin-top: 10px;
        }

        a {
            text-decoration: none;
            color: black;
            margin-right: 10px;
            font-size: 14px;
        }

        a:hover {
            color: #df6a21;
        }

        
        footer {
            margin-top: 130px;
            text-align: center;
            font-size: 12px;
            color: gray;
        }
    </style>
</head>

<body>

<header class="top">
    <h2 >Admin Panel</h2><br>

    <a href="/">
        <i class="fa-solid fa-house"></i>Home
    </a>

</header>

<hr>

<div class="container">

    <div class="box">
        <h3>Users</h3>
        <p>Manage all system users</p>
    </div>

    <div class="box">
        <h3>Classes</h3>
        <p>Manage classrooms</p>
    </div>

    <div class="box">
        <h3>Students</h3>
        <p>Manage student records</p>
    </div>

</div>

<footer>
    © 2026 Admin System
</footer>

</body>
</html>