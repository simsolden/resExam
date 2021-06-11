<?php

return [
    'feeds' => [
        'main' => [
            /*
             * Here you can specify which class and method will return
             * the items that should appear in the feed. For example:
             * 'App\Model@getAllFeedItems'
             *
             * You can also pass an argument to that method:
             * ['App\Model@getAllFeedItems', 'argument']
             */
            'items' => 'App\Models\NewsItem@getFeedItems',

            /*
             * The feed will be available on this url.
             */
            'url' => '/feed',

            'title' => env('APP_NAME'),
            'description' => 'Liste des derniers spectacles.',
            'language' => 'fr-BE',
            'updated' => date(DATE_RSS),    //TODO : résoudre

            /*
             * The view that will render the feed.
             */
            'view' => 'feed::rss',  //TODO permettre un tableau de template (rss et feed -> Atom)

            /*
             * The type to be used in the <link> tag
             */
            'type' => 'application/rss+xml',
        ],
    ],
];
