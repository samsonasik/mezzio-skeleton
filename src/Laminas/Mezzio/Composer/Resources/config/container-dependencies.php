<?php

return [
    'dependencies' => [
        'factories' => [
            Mezzio\Application::class => Mezzio\Container\ApplicationFactory::class,

            App\Action\HomePageAction::class => App\Action\HomePageFactory::class,
            App\Action\PingAction::class => App\Action\PingFactory::class,
        ]
    ]
];
