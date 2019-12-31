<?php

return [
    'dependencies' => [
        'factories' => [
            'Mezzio\FinalHandler' => Mezzio\Container\TemplatedErrorHandlerFactory::class,
            Mezzio\Template\TemplateInterface::class => App\Template\PlatesFactory::class,
        ],
    ],

    'templates' => [
        'cache_dir' => 'data/cache/twig',
        'extension' => 'phtml',
        'assets_url' => '/', // Path prefix or CDN url
        'assets_version' => null, // Version to place behind assets
        'paths' => [
            'templates/app' => 'app',
            'templates/layout' => 'layout',
            'templates/error' => 'error',
        ]
    ]
];
