<?php

return [
    'excerpt' => function ($page, $limit = 250, $end = '...') {
        if ($page->isPost)
            return str_limit_soft(content_sanitize($page->getContent()), $limit, $end);

        if ($page->isPerson)
            return str_limit_soft(content_sanitize($page->getContent()), $limit, $end);

        return null;
    },
];
