<?php

return [
    'plugin' => [
        'name' => 'FeedBug',
        'description' => 'Граббер RSS ленты.'
    ],
    'component' => [
        'name' => 'Граббер RSS ленты',
        'description' => 'Создание граббера RSS ленты для вашего сайта.',
        'settings' => [
            'name' => 'Название ленты',
            'name_description' => 'Название RSS ленты, которое можно использовать как заголовок на странице вывода.',
            'target' => 'URL RSS ленты',
            'target_description' => 'Адрес сайта, с которого необходимо взять RSS ленту. Полный адрес до RSS ленты.',
            'max_feed' => 'Записей в списке',
            'max_feed_description' => 'Количество элементов (записей) в ленте, которые необходимо вывести.',
            'max_feed_validation' => 'Недопустимый формат значения. Только целые положительные числа.',
            'feed_no_items' => 'Сообщение пустой ленты',
            'feed_no_items_description' => 'Сообщение, отображаемое в списке ленты в случае, если нет элементов. Это свойство используется по умолчанию компонентом при выводе ленты.'
        ],
        'error' => [
            'title' => 'Нет элементов в RSS ленте',
            'description' => 'Проверьте URL-адрес канала. Возможно вы допустили ошибку или RSS-канал больше не существует.'
        ]
    ]
];
