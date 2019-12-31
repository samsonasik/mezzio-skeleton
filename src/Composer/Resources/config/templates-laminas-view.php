<?php

return [
    'dependencies' => [
        'factories' => [
            'Mezzio\FinalHandler' =>
                Mezzio\Container\TemplatedErrorHandlerFactory::class,

            Mezzio\Template\TemplateInterface::class =>
                Mezzio\Container\Template\LaminasViewFactory::class,
        ],
    ],

    'templates' => [
        'layout' => 'layout/default',
        'map' => [
            'layout/default' => 'templates/layout/default.phtml',
            'error/error'    => 'templates/error/error.phtml',
            'error/404'      => 'templates/error/404.phtml',
        ],
        'paths' => [
            'app'    => ['templates/app'],
            'layout' => ['templates/layout'],
            'error'  => ['templates/error'],
        ]
    ]
];
