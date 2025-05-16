<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 't3v13-bootstrap',
    'description' => 'My TYPO3 v13 bootstrap-based extension',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'bootstrap_package' => '15.0.0-15.99.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Mysoft\\T3v13Bootstrap\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Murat Yasar',
    'author_email' => 'dev.muratyasar@gmail.com',
    'author_company' => 'MySoft',
    'version' => '1.0.0',
];
