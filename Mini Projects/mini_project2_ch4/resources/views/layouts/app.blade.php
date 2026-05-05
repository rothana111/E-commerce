<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
    <style>
        a {
            color: rgb(6, 86, 207);
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
 
<body>

<nav>
    <a href="{{ route('admin.dashboard') }}">Dashboard</a> |
    <a href="{{ route('admin.users') }}">Users</a> |
    <a href="{{ route('admin.settings') }}">Settings</a>
</nav>

<hr>

@yield('content')

</body>
</html>