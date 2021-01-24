---
pagination:
  collection: posts
  perPage: 6
---
@extends('_layouts.master')

@section('title', 'Posts')

@section('content')
    <div class="w3-content w3-padding-32" style="max-width:1564px" id="posts">

        @foreach ($pagination->items as $post)
            @if ($loop->index % 3 == 0)
                <div class="w3-row-padding">
            @endif
            <div class="w3-third w3-container w3-hover-opacity" id="post">
                <a href="{{ $post->getPath() }}">
                    <img src="{{ $post->image }}" alt="{{ $post->title }}" style="width:100%">
                    <div class="w3-container w3-teal">
                        <h3>{{ $post->title }}</h3>
                        <small>{{ $post->prettyDate() }}</small>
                        <p>{{ $post->description }}</p>
                    </div>
                </a>
            </div>
            @if ($loop->index % 3 == 2 || $loop->index == $loop->count - 1)
                </div>
            @endif
        @endforeach

        <div class="w3-center w3-padding-top-32">
            <div class="w3-bar">

                @if ($previous = $pagination->previous)
                    <a href="{{ $page->baseUrl }}{{ $pagination->first }}" class="w3-bar-item w3-button w3-hover-black">&lt;&lt;</a>
                    <a href="{{ $page->baseUrl }}{{ $previous }}" class="w3-bar-item w3-button w3-hover-black">&lt;</a>
                @endif

                @foreach ($pagination->pages as $pageNumber => $path)
                    <a href="{{ $page->baseUrl }}{{ $path }}"
                        class="w3-bar-item w3-button {{ $pagination->currentPage == $pageNumber ? 'w3-black' : 'w3-hover-black' }}">
                        {{ $pageNumber }}
                    </a>
                @endforeach

                @if ($next = $pagination->next)
                    <a href="{{ $page->baseUrl }}{{ $next }}" class="w3-bar-item w3-button w3-hover-black">&gt;</a>
                    <a href="{{ $page->baseUrl }}{{ $pagination->last }}" class="w3-bar-item w3-button w3-hover-black">&gt;&gt;</a>
                @endif

            </div>
        </div>
    </div>

@endsection
