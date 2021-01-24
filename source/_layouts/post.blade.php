@extends('_layouts.master')

@section('title', $page->title)

@section('content')
    <div class="w3-content" style="max-width:1564px">
        <div class="w3-container w3-teal" id="post-header">
            <h1>{{ $page->title }}</h1>
            <p class="w3-border-bottom">{{ $page->prettyDate('F j, Y') }}</p>
        </div>

        <div class="w3-container" id="post-content">
            @yield('postContent')
        </div>

        <div class="w3-container w3-topbar" id="post-comment">
            @include('_partials.share')

            @if ($page->comments)
                @include('_partials.comments')
            @else
                <p>Comments are not enabled for this post.</p>
            @endif
        </div>
    </div>
@endsection
