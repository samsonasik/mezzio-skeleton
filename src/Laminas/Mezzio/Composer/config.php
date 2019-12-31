<?php

return [
    'packages' => [
        'aura/di'                           => '3.0.*@beta',
        'aura/router'                       => '^2.3',
        'league/plates'                     => '^3.1',
        'mouf/pimple-interop'               => '^1.0',
        'nikic/fast-route'                  => '^0.6.0',
        'ocramius/proxy-manager'            => '^1.0',
        'twig/twig'                         => '^1.21',
        'laminas/laminas-filter'         => '^2.5',
        'laminas/laminas-i18n'           => '^2.5',
        'laminas/laminas-mvc'            => '^2.5',
        'laminas/laminas-psr7bridge'     => '^0.1.0',
        'laminas/laminas-servicemanager' => '^2.5',
        'laminas/laminas-view'           => '^2.5',
    ],

    'questions' => [
        'router' => [
            'question'               => 'Which router you want to use?',
            'default'                => 1,
            // TRUE: Must choose one / FALSE: May choose one or none of the above
            'required'               => true,
            // Enable custom package input
            'custom-package'         => true,
            // Display warning when choosing a custom package
            'custom-package-warning' => 'You need to write your own router adapter.',
            'options'                => [
                1 => [
                    'name'     => 'aura/router',
                    'packages' => [
                        'aura/router',
                    ],
                    'copy-files' => [
                        // Copy source file to target: '<source>' => '<target>'
                        '/Resources/config/aura-router-routes.php' => '/config/autoload/router.global.php',
                    ],
                ],
                2 => [
                    'name'     => 'nikic/fast-route',
                    'packages' => [
                        'nikic/fast-route',
                    ],
                    'copy-files' => [
                        '/Resources/config/fast-route-routes.php' => '/config/autoload/router.global.php',
                    ],
                ],
                3 => [
                    'name'     => 'laminas-mvc TreeRouteStack',
                    'packages' => [
                        'laminas/laminas-mvc',
                        'laminas/laminas-psr7bridge',
                    ],
                    'copy-files' => [
                        '/Resources/config/laminas-router-routes.php' => '/config/autoload/router.global.php',
                    ],
                ],
            ],
        ],

        'container' => [
            'question'               => 'Which container you want to use for dependency injection?',
            'default'                => 1,
            'required'               => true,
            'custom-package'         => true,
            'custom-package-warning' => 'You need to edit public/index.php to start the custom container.',
            'options'                => [
                1 => [
                    'name'     => 'laminas/laminas-servicemanager',
                    'packages' => [
                        'laminas/laminas-servicemanager',
                        'ocramius/proxy-manager',
                    ],
                    'copy-files' => [
                        '/Resources/config/laminas-servicemanager-container.php' => '/config/container.php',
                        '/Resources/config/container-dependencies.php' => '/config/autoload/dependencies.global.php',
                    ],
                ],
                2 => [
                    'name'     => 'mouf/pimple-interop',
                    'packages' => [
                        'mouf/pimple-interop',
                    ],
                    'copy-files' => [
                        '/Resources/config/pimple-interop-container.php' => '/config/container.php',
                        '/Resources/config/container-dependencies.php' => '/config/autoload/dependencies.global.php',
                    ],
                ],
                3 => [
                    'name'     => 'aura/di',
                    'packages' => [
                        'aura/di',
                    ],
                    'copy-files' => [
                        '/Resources/config/aura-di-container.php' => '/config/container.php',
                        '/Resources/config/container-dependencies.php' => '/config/autoload/dependencies.global.php',
                    ],
                ],
            ],
        ],

        'template-engine' => [
            'question'       => 'Which template engine you want to use?',
            'default'        => 'n',
            'required'       => false,
            'custom-package' => true,
            'options'        => [
                1 => [
                    'name'     => 'laminas/laminas-view',
                    'packages' => [
                        'laminas/laminas-view',
                        'laminas/laminas-filter',
                        'laminas/laminas-i18n',
                        'laminas/laminas-servicemanager'
                    ],
                    'copy-files' => [
                        '/Resources/config/laminas-view-templates.php' => '/config/autoload/templates.global.php',
                        '/Resources/templates/laminas-view-404.phtml' => '/templates/error/404.phtml',
                        '/Resources/templates/laminas-view-500.phtml' => '/templates/error/500.phtml',
                        '/Resources/templates/laminas-view-error.phtml' => '/templates/error/error.phtml',
                        '/Resources/templates/laminas-view-layout.phtml' => '/templates/layout/default.phtml',
                        '/Resources/templates/laminas-view-home-page.phtml' => '/templates/app/home-page.phtml',
                    ],
                ],
                2 => [
                    'name'     => 'league/plates',
                    'packages' => [
                        'league/plates',
                    ],
                    'copy-files' => [
                        '/Resources/config/plates-templates.php' => '/config/autoload/templates.global.php',
                        '/Resources/templates/plates-404.phtml' => '/templates/error/404.phtml',
                        '/Resources/templates/plates-500.phtml' => '/templates/error/500.phtml',
                        '/Resources/templates/plates-error.phtml' => '/templates/error/error.phtml',
                        '/Resources/templates/plates-layout.phtml' => '/templates/layout/default.phtml',
                        '/Resources/templates/plates-home-page.phtml' => '/templates/app/home-page.phtml',
                    ],
                ],
                3 => [
                    'name'     => 'twig/twig',
                    'packages' => [
                        'twig/twig',
                    ],
                    'copy-files' => [
                        '/Resources/config/twig-templates.php' => '/config/autoload/templates.global.php',
                        '/Resources/templates/twig-404.html.twig' => '/templates/error/404.html.twig',
                        '/Resources/templates/twig-500.html.twig' => '/templates/error/500.html.twig',
                        '/Resources/templates/twig-error.html.twig' => '/templates/error/error.html.twig',
                        '/Resources/templates/twig-layout.html.twig' => '/templates/layout/default.html.twig',
                        '/Resources/templates/twig-home-page.html.twig' => '/templates/app/home-page.html.twig',
                    ],
                ],
            ],
        ],
    ],
];
