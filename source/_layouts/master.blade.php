<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>
        @yield('title')
        {{ !empty($__env->yieldContent('title')) ? ' | ' : '' }}
        {{ $page->site->title }}
    </title>

    @include('_partials.head.favicon')
    @include('_partials.head.meta')
    @include('_partials.cms.identity_widget')

    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
</head>
<body>
    <nav role="navigation">
        <div id="menuToggle">
            <input class="burger" type="checkbox" />

            <span class="burger"></span>
            <span class="burger"></span>
            <span class="burger"></span>
        </div>
        <ul id="menu">
            <a href="/"><li>Home</li></a>
            <a href="/posts"><li>Posts</li></a>
            <a href="/about"><li>About</li></a>
            <a href="/contact"><li>Contact</li></a>
        </ul>
    </nav>

    <section>
        <article>
            <section>
                @yield('content')
            </section>
        </article>

        <footer class="w3-center w3-black w3-padding-16">
            <small>
                &copy; <span data-year></span> {{ $page->owner->name }} &nbsp;&bull;&nbsp;
                <a href="/feed.atom">RSS</a> &nbsp;&bull;&nbsp;
                Maintained by Caroline Aubry &nbsp;&bull;&nbsp;
                <a href="https://github.com/caubry/ngq-residents">GitHub repo</a>.
            </small>
        </footer>
    </section>

    <script src="{{ mix('js/main.js', 'assets/build') }}"></script>
    @includeWhen($page->production, '_partials.analytics')
    @include('_partials.cms.identity_redirect')
</body>
</html>
