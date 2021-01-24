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
    <div class="navigation">
        <nav class="cbnav">
            <label for="toggle" id="toggle-menu">
                <a href="/"><img src="/assets/build/images/logo.jpg" alt="logo" id="logo-mobile"></a>
                <span class="cbnav__label"><span class="cbnav__arrow"></span></span>
            </label>
            <input type="checkbox" id="toggle">
            <ul class="cbnav__lvl--first">
                <li class="cbnav__item">
                    <a class="cbnav__link--first {{ $page->getPath() != '' ?: 'cbnav__link--active' }}" href="/">Home</a>
                </li>
                <li class="cbnav__item">
                    <a class="cbnav__link--first {{ $page->getPath() != '/posts' ?: 'cbnav__link--active' }}" href="/posts">Posts</a>
                </li>
                <li class="cbnav__item">
                    <a class="cbnav__link--first {{ $page->getPath() != '/about' ?: 'cbnav__link--active' }}" href="/about">About</a>
                </li>
                <li class="cbnav__item">
                    <a class="cbnav__link--first {{ $page->getPath() != '/contact' ?: 'cbnav__link--active' }}" href="/contact">Contact</a>
                </li>
            </ul>
        </nav>
        <a id="logo" href="/"><img src="/assets/build/images/logo.jpg" alt="logo"></a>
    </div>

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
