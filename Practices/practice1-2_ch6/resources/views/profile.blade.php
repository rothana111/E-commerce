<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
</head>
<style>
    body{
        background-color: #e3e2e2;
    }
</style>
<body>
    <a href="/"> ↪ back to Welcome</a>

    <h1>Profile</h1>

    <p>Name: {{ $name }}</p>
    <p>Age: {{ $age }}</p>

    @if($age >= 18)
        <p>Status: Adult</p>
    @else
        <p>Status: Minor</p>
    @endif

</body>
</html>