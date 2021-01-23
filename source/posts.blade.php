@extends('_layouts.master')

@section('title', 'Posts')

@section('content')
    <div class="w3-content" style="max-width:1564px">
        <div class="w3-container">
            <h1 class="w3-border-bottom w3-border-light-grey w3-padding-16">Posts</h1>
            <ul>
                @forelse ($posts->sortBy('title') as $post)
                    <li>
                        <a href="{{ $post->getPath() }}">{{ $post->title }}</a>
                        <small>{{ $post->prettyDate() }}</small>
                    </li>
                @empty
                    <p>No posts to show.</p>
                @endforelse
            </ul>
        </div>
    </div>
@endsection
