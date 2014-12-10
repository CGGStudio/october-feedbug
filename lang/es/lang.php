<?php

return [
    'plugin' => [
        'name' => 'FeedBug',
        'description' => 'Capturador de fuentes de RSS.'
    ],
    'component' => [
        'name' => 'Capturador de fuentes de RSS',
        'description' => 'Capturador de fuentes de RSS para su sitio web.',
        'settings' => [
            'name' => 'El nombre de su fuente',
            'name_description' => 'El nombre de la fuente RSS que se puede utilizar como un título para la salida de la página.',
            'target' => 'URL de la fuente RSS',
            'target_description' => 'Dirección del sitio web desde donde se tomará la fuente RSS. Dirección completa hasta la fuente RSS.',
            'max_feed' => 'Número máximo de elementos',
            'max_feed_description' => 'Número de items (elementos) que quieres visualizar.',
            'max_feed_validation' => 'Valor no válido. Sólo números enteros positivos.',
            'feed_no_items' => 'Mensaje en blanco',
            'feed_no_items_description' => 'El mensaje que aparece si la fuente esta vacia. Esta propiedad es usada por defecto por el componente de la fuente de salida.'
        ],
        'error' => [
            'title' => 'La fuente RSS no tiene elementos',
            'description' => 'Compruebe la dirección URL de la fuente RSS. Puede ser que haya un error o que la fuente no existe.'
        ]
    ]
];
