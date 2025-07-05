@extends('layouts.main')

@section('container')
    <article class="mb-5">
        <h2>
            {{ $post['title'] }}
        </h2>
        <h5>By: {{ $post['author'] }}</h5>
        <p>{{ $post['body'] }}</p>
        <a href="/blog" class="badge badge-primary">Back to post &laquo;</a>
    </article>
@endsection
