<h2>Student List</h2>
@foreach ($students as $s)
    <p>
        Name: {{ $s->name }}<br>
        Email: {{ $s->email }}<br>
        Age: {{ $s->age }}<br>
        <a href="/update/{{ $s->id }}">Update</a> | 
        <a href="/delete/{{ $s->id }}">Delete</a>

    </p>
@endforeach