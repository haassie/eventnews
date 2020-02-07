<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'News events',
    'description' => 'Events for news',
    'category' => 'plugin',
    'author' => 'Georg Ringer',
    'author_email' => '',
    'state' => 'beta',
    'clearCacheOnLoad' => true,
    'version' => '4.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.13-10.5.99',
            'news' => '7.0.0-8.9.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
