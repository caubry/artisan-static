@extends('_layouts.master')

@section('title', 'About')

@section('content')
    <div class="w3-content" style="max-width:1564px">
        <div class="w3-container" id="about">
            <h1 class="w3-border-bottom w3-border-light-grey w3-padding-16">About</h1>
            <h2>{{ $page->owner->name }}</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint
              occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
              laboris nisi ut aliquip ex ea commodo consequat.
            </p>
        </div>

        <div class="w3-container">
            <h3>Who are we?</h3>

            <div class="w3-grayscale people-table">
            @foreach ($people->sortBy('order') as $person)
            <div class="w3-col l3 m4 w3-margin-bottom people-col">
                <img class="w3-image thumb" src="../{{ $person->image }}" alt="{{ $person->image }}">
                <h3>{{ $person->name }}</h3>
                <p class="w3-opacity">{{ $person->responsibility }}</p>
                <p>{{ $person->excerpt() }}</p>
            </div>
            @endforeach
            </div>
        </div>

        <div class="w3-container social-links">
            <h4 class="w3-border-top w3-border-light-grey w3-padding-16">Socials</h4>
            <ul>
                <li><a href="https://twitter.com/{{ $page->owner->twitter }}" target="_blank">Twitter</a></li>
                <li><a href="https://github.com/{{ $page->owner->github }}" target="_blank">GitHub</a></li>
                <li><a href="https://facebook.com/{{ $page->owner->facebook }}" target="_blank">Facebook</a></li>
            </ul>
        </div>
    </div>
@endsection
