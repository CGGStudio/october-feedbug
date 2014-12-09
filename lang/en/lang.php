<?php

return [
    'plugin' => [
        'name' => 'FeedBug',
        'description' => 'RSS feed grabber.'
    ],
    'component' => [
        'name' => 'RSS feed grabber',
        'description' => 'Creation of RSS feed grabber for your website.',
        'settings' => [
            'name' => 'The name of your feed',
            'name_description' => 'The name of RSS feed that may be used as a title for page output.',
            'target' => 'URL of RSS feed',
            'target_description' => 'Website address from where RSS feed will be taken. Full address until RSS feed.',
            'max_feed' => 'Notes in list',
            'max_feed_description' => 'Number of items (notes) that you want to display.',
            'max_feed_validation' => 'Invalid value format. Only positive integers.',
            'feed_no_items' => 'Blank feed message',
            'feed_no_items_description' => 'Message to display in case there are no elements. This Property is used by default by the component in feed output.'
        ],
        'error' => [
            'title' => 'RSS feed has no items',
            'description' => 'Check the URL-address of feed. May be you made a mistake or RSS feed does not exist.'
        ]
    ]
];
