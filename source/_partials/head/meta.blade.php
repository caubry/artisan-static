<!-- seo/social -->
<link rel="canonical" href="{{ $page->getUrl() }}">
<meta name="referrer" content="no-referrer-when-downgrade">
<meta name="author" content="{{ $page->owner->name }}">
<meta name="description" content="{!! $page->excerpt() ?: $page->site->description !!}">

<meta property="og:title" content="{{ $page->title ?: $page->site->title }}">
<meta property="og:description" content="{!! $page->excerpt() ?: $page->site->description !!}">
<meta property="og:type" content="{{ $page->isPost ? 'article' : 'website' }}">
<meta property="og:site_name" content="{{ $page->site->title }}">
<meta property="og:url" content="{{ $page->getUrl() }}">
<!-- end seo/social -->
