<h2>Add Student</h2>

<form action="{{ route('students.store') }}" method="POST">
    @csrf

    Name: <input type="text" name="name"><br><br>
    Email: <input type="email" name="email"><br><br>
    Course: <input type="text" name="course"><br><br>
    Age: <input type="number" name="age"><br><br>

    <button type="submit">Add</button>
</form>

<a href="{{ route('students.index') }}">Back</a>