<!DOCTYPE html>
<html>
<head>
    <title>Blog</title>
</head>
<body>
<style>
    footer{
        margin-top: 410px;
        text-align: center;
    }
    h1 a{
        color: #111827;
        text-decoration: none;
    }
    h1 a:hover {
        color: rgb(103, 112, 128);
        text-decoration: none;
    }
    a {
        font-family:  'Segoe UI';
        color: rgb(6, 86, 207);
        
    }
    a:hover {
        color: rgb(240, 60, 10);
    }
</style>
<header>
    <h1><a href="/">My Blog</a></h1>
    <a href="/blog">All Posts</a>
    <hr>
</header>

@yield('content')

<footer>
    <hr>
    <p>@Blog Footer</p>
</footer>

</body>
</html>