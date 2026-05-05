<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>

    <style>
        body {
            margin: 0;
            font-family: Arial;
            background: #f3f4f6;
            text-align: center;

            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .box {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        h1 {
            font-size: 28px;
            color: #111827;
            margin-bottom: 5px;
        }

        p {
            margin-top: 30px;
            color: #6b7280;
            font-size: 14px;
            margin-bottom: 15px;
        }

        a {
            display: inline-block;
            margin: 5px;
            padding: 8px 12px;
            text-decoration: none;
            color: white;
            background: #374151;
            border-radius: 6px;
            font-size: 13px;
        }

        a:hover {
            opacity: 0.85;
        }

        footer {
            font-size: 12px;
            color: #9ca3af;
            padding: 10px;
        }
        small {
            color: #807f7f;
            display: block;
            margin-top: 20px;
            margin-bottom: 30px;
        }
        h1 {
            
            word-spacing: 30px;
        }
    </style>
</head>

<body>

<div class="box">
    <h1> ⁘  Welcome  ⁘ </h1>
    <p>Practice Project 1 & 2 in Chapter 4</p>

    <div>
        <a href="/about">About</a>
        <a href="/contact">Contact</a>
        <a href="/greet">Greet</a><br>
        <small>note : for greet you gotta type /yourname</small>
    </div>
</div>

<footer>
    Laravel © 2026
</footer>

</body>
</html>