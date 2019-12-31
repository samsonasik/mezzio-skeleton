<?php

return [
    'dependencies' => [
        'factories' => [
            'Mezzio\FinalHandler' =>
                Mezzio\Container\TemplatedErrorHandlerFactory::class,

            Mezzio\Template\TemplateInterface::class =>
                Mezzio\Container\Template\PlatesFactory::class,
        ],
    ],

    'templates' => [
        'extension' => 'phtml',
        'paths' => [
            'app'    => ['templates/app'],
            'layout' => ['templates/layout'],
            'error'  => ['templates/error'],
        ]
    ]
];
