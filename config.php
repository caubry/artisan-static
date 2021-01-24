<?php

return [
    'production' => false,
    'baseUrl' => 'http://localhost:3000',
    'site' => [
        'title' => 'NGQ Residents Association',
        'description' => 'Website for NGQ residents',
    ],
    'owner' => [
        'name' => 'NGQ Residents Association',
    ],
    'services' => [
        'cmsVersion' => '2.10.67',
        'analytics' => 'UA-XXXXX-Y',
        'disqus' => 'artisanstatic',
        'formcarry' => 'XXXXXXXXXXXX',
        'cloudinary' => [
            'cloudName' => 'artisanstatic',
            'apiKey' => '365895137117119',
        ],
    ],
    'collections' => [
        'people' => [
            'path' => 'people/{filename}',
            'isPerson' => true,
        ],
        'posts' => [
            'path' => 'posts/{filename}',
            'sort' => '-date',
            'extends' => '_layouts.post',
            'section' => 'postContent',
            'isPost' => true,
            'comments' => true,
            'prettyDate' => function ($page, $format = 'M j, Y') {
                return date($format, $page->date);
            },
        ]
    ],
];
