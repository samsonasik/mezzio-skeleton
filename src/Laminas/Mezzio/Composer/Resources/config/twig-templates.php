<?php

return [
    'dependencies' => [
        'factories' => [
            'Mezzio\FinalHandler' => Mezzio\Container\TemplatedErrorHandlerFactory::class,
            Mezzio\Template\TemplateInterface::class => App\Template\TwigFactory::class,
        ],
    ],

    'templates' => [
        'cache_dir' => 'data/cache/twig',
        'extension' => 'html.twig',
        'assets_url' => '/', // Path prefix or CDN url
        'assets_version' => null, // Version to place behind assets
        'paths' => [
            'templates/app' => 'app',
            'templates/layout' => 'layout'
        ]
    ]
];
