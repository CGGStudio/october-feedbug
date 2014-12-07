<?php

return [
    'plugin' => [
        'name' => 'FeedBug',
        'description' => 'Grabber RSS feed.'
    ],
    'component' => [
        'name' => 'Grabber Feed',
        'description' => 'Create an RSS widget for your website.',
        'settings' => [
            'name' => 'Name feed',
            'name_description' => 'Name for RSS feed.',
            'target' => 'URL RSS feed',
            'target_description' => 'The address of the website from which you need to take an RSS feed.',
            'max_feed' => 'Records per list',
            'max_feed_validation' => 'Invalid format of the records per list value',
            'feed_no_items' => 'No items in feed message',
            'feed_no_items_description' => 'Message to display in the feed list in case if there are no items. This property is used by the default component partial.'
        ],
        'error' => [
            'title' => 'No items in feed',
            'description' => "Check the feed URL. Perhaps you made a mistake or RSS feed doesn't exist any more."
        ]
    ]
];
