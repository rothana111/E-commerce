<!DOCTYPE html>
<html>
<head>
    <title>Students List</title>

<style>
    body {
        font-family: Arial;
        background: #eef;
        padding: 20px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        background: white;
    }

    th, td {
        padding: 10px;
        border: 1px solid #ddd;
        text-align: center;
    }

    th {
        background: #333;
        color: white;
    }

    .btn {
        padding: 5px 10px;
        text-decoration: none;
        color: white;
        border-radius: 4px;
    }

    .add {
        background: green;
    }

    .edit {
        background: rgb(6, 86, 207)
    }

    .delete {
        background: rgb(42, 43, 43);
    }
    .back{
        text-decoration: none;
        padding: 6px 10px;
        color: rgb(58, 57, 57);
        background: #ffffff;
        border-radius: 6px;
    }
   .back:hover {
      background: #f0f0f0;
    }
    </style>
</head>
<body>
    <a class="back"  href="/">← Back </a>

<h2>Students List</h2>

<a class="btn add" href="/students/create">+ Add Student</a>

<br><br>

<table>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Course</th>
        <th>Age</th>
        <th>Actions</th>
    </tr>

    @foreach($students as $student)
    <tr>
        <td>{{ $student->name }}</td>
        <td>{{ $student->email }}</td>
        <td>{{ $student->course }}</td>
        <td>{{ $student->age }}</td>
        <td>
            <a class="btn edit" href="/students/{{ $student->id }}/edit">Edit</a>

            <form action="/students/{{ $student->id }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button class="btn delete">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

</body>
</html>