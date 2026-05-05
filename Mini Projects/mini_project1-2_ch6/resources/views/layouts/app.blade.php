<!DOCTYPE html>
<html>
<head>
    <title>Student App</title>
</head>
<style>
    body{
        background-color: #f9f9f9;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    footer{
        margin-top: 380px;
        text-align: center;
    }
    
</style>
<body>

    <header>
        <h1>Student System</h1>
        <hr>
    </header>

    @yield('content')

    <footer>
        <hr>
        <p>© 2026</p>
    </footer>

</body>
</html>