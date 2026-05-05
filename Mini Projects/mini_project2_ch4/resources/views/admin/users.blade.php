@extends('layouts.app')
@section('content')
<h1>Users List</h1>
<ul>
@foreach($users as $user)
    <li>{{ $user['id'] }} - {{ $user['name'] }}</li>
@endforeach
</ul>
@endsection