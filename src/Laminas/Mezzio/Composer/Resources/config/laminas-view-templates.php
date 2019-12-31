<?php

return [
    'dependencies' => [
        'factories' => [
            'Mezzio\FinalHandler' => Mezzio\Container\TemplatedErrorHandlerFactory::class,
            Mezzio\Template\TemplateInterface::class => App\Template\LaminasViewFactory::class,
        ],
    ],

    'templates' => [
        'cache_dir'       => 'data/cache/laminas-view',
        'extension'       => 'php',
        'map' => [
            'layout/default' => 'templates/layout/default.phtml',
            'error/error'    => 'templates/error/error.phtml',
            'error/404'      => 'templates/error/404.phtml',
        ],
        'paths' => [
            'templates/app'    => 'app',
            'templates/layout' => 'layout',
            'templates/error'  => 'error',
        ]
    ]
];
