
@extends('layouts.blog')

@section('content')
    <h2>Blog Posts</h2>

    <ul>
        @foreach($blogs as $b)
            <li>
                <a href="/blog/{{ $b['id'] }}">
                    {{ $b['title'] }}
                </a>
            </li>
        @endforeach
    </ul>
@endsection