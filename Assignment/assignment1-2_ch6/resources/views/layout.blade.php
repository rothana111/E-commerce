<!DOCTYPE html>
<html>
<head>
    <title>My Website</title>
</head>
<style>
    body{
        background-color: #f0f0f0;
        font-family: Arial, sans-serif;
    }
    
    .title a {
    text-decoration: none;
    color: black;
    }

    .title a:hover {
    color: #060606;
    }

    header{
        margin-top: -10px;
        
    }

    header a {
    text-decoration: none;
    color: black;
    margin-right: 5px;
    }

    header a:hover {
    color: #717274;
    }

    main {
        text-align: center;
        
    }
    footer{
        margin-top:450px;
    }
   
</style>
<body>

    <!-- Header -->
    <header>
        <h1 class="title" ><a href="/">My Website</a></h1>
        <a href="/home">Home</a> |
        <a href="/about">About</a>
        <hr>
    </header>

    <main>
    <!-- Content -->
    @yield('content')
    </main>

    <!-- Footer -->
    <footer>
        <hr>
        <p>© 2026 My Website</p>
    </footer>

</body>
</html>