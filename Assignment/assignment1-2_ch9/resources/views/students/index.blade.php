<!DOCTYPE html>
<html>
<head>
    <title>Student List</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f0f0f0;
            margin: 20px;
        }

        h2 {
            margin-bottom: 10px;
        }
        h2 a {
            text-decoration: none;
            color: #111827;
            font-size: 22px; 
        }

        h2 a:hover {
            text-decoration: none;

        }

        a {
            text-decoration: none;
            color: #2563eb;
            margin-right: 8px;
        }

        a:hover {
            text-decoration: underline;
        }

        .top {
            margin-bottom: 15px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
        }

        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background: #f3f4f6;
        }

        #success-alert {
            position: fixed;
            top: 20px;
            left: 50%;
            transform: translateX(-50%) translateY(-10px);
            background: #2ecc71;
            color: white;
            padding: 12px 20px;
            border-radius: 8px;
            font-weight: bold;
            opacity: 0;
            transition: all 0.3s ease;
        }
    </style>
</head>

<body>

<h2><a href="/">Student List</a></h2>

<div class="top">
    <a href="{{ route('students.create') }}">+ Add Student</a>
</div>

@if(session('success'))
    <div id="success-alert">
        {{ session('success') }}
    </div>

    <script>
        const el = document.getElementById('success-alert');

        setTimeout(() => {
            el.style.opacity = "1";
            el.style.transform = "translateX(-50%) translateY(0)";
        }, 10);

        setTimeout(() => {
            el.style.opacity = "0";
            el.style.transform = "translateX(-50%) translateY(-10px)";
            setTimeout(() => el.remove(), 300);
        }, 2500);
    </script>
@endif

<table>
    <tr>
        <th>No.</th>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Course</th>
        <th>Age</th>
        <th>Action</th>
    </tr>

    @foreach($students as $index => $student)
    <tr>
        <td>{{ $index + 1 }}</td>
        <td>{{ $student->id }}</td>
        <td>{{ $student->name }}</td>
        <td>{{ $student->email }}</td>
        <td>{{ $student->course }}</td>
        <td>{{ $student->age }}</td>
        <td>
            <a href="{{ route('students.edit', $student->id) }}">Edit</a>

            <a href="#"
               onclick="event.preventDefault(); if(confirm('Delete this student?')) document.getElementById('delete-{{ $student->id }}').submit();">
                Delete
            </a>

            <form id="delete-{{ $student->id }}" action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:none;">
                @csrf
                @method('DELETE')
            </form>
        </td>
    </tr>
    @endforeach

</table>

</body>
</html>