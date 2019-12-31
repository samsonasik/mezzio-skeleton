<?php

return [
    'packages' => [
        'aura/di'                           => '3.0.*@beta',
        'aura/router'                       => '^2.3',
        'filp/whoops'                       => '^1.1',
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

    'require-dev' => [
        'filp/whoops'
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
                    'name'     => 'Aura.Router',
                    'packages' => [
                        'aura/router',
                    ],
                    'copy-files' => [
                        // Copy source file to target: '<source>' => '<target>'
                        '/Resources/config/routes-aura-router.php' => '/config/autoload/routes.global.php',
                    ],
                ],
                2 => [
                    'name'     => 'FastRoute',
                    'packages' => [
                        'nikic/fast-route',
                    ],
                    'copy-files' => [
                        '/Resources/config/routes-fast-route.php' => '/config/autoload/routes.global.php',
                    ],
                ],
                3 => [
                    'name'     => 'Laminas Router',
                    'packages' => [
                        'laminas/laminas-mvc',
                        'laminas/laminas-psr7bridge',
                    ],
                    'copy-files' => [
                        '/Resources/config/routes-laminas-router.php' => '/config/autoload/routes.global.php',
                    ],
                ],
            ],
        ],

        'container' => [
            'question'               => 'Which container you want to use for dependency injection?',
            'default'                => 3,
            'required'               => true,
            'custom-package'         => true,
            'custom-package-warning' => 'You need to edit public/index.php to start the custom container.',
            'options'                => [
                1 => [
                    'name'     => 'Aura.Di',
                    'packages' => [
                        'aura/di',
                    ],
                    'copy-files' => [
                        '/Resources/config/container-aura-di.php' => '/config/container.php',
                    ],
                ],
                2 => [
                    'name'     => 'Pimple-interop',
                    'packages' => [
                        'mouf/pimple-interop',
                    ],
                    'copy-files' => [
                        '/Resources/config/container-pimple-interop.php' => '/config/container.php',
                    ],
                ],
                3 => [
                    'name'     => 'Laminas ServiceManager',
                    'packages' => [
                        'laminas/laminas-servicemanager',
                        'ocramius/proxy-manager',
                    ],
                    'copy-files' => [
                        '/Resources/config/container-laminas-servicemanager.php' => '/config/container.php',
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
                    'name'     => 'Plates',
                    'packages' => [
                        'league/plates',
                    ],
                    'copy-files' => [
                        '/Resources/config/templates-plates.php' => '/config/autoload/templates.global.php',
                        '/Resources/templates/plates-404.phtml' => '/templates/error/404.phtml',
                        '/Resources/templates/plates-error.phtml' => '/templates/error/error.phtml',
                        '/Resources/templates/plates-layout.phtml' => '/templates/layout/default.phtml',
                        '/Resources/templates/plates-home-page.phtml' => '/templates/app/home-page.phtml',
                    ],
                ],
                2 => [
                    'name'     => 'Twig',
                    'packages' => [
                        'twig/twig',
                    ],
                    'copy-files' => [
                        '/Resources/config/templates-twig.php' => '/config/autoload/templates.global.php',
                        '/Resources/templates/twig-404.html.twig' => '/templates/error/404.html.twig',
                        '/Resources/templates/twig-error.html.twig' => '/templates/error/error.html.twig',
                        '/Resources/templates/twig-layout.html.twig' => '/templates/layout/default.html.twig',
                        '/Resources/templates/twig-home-page.html.twig' => '/templates/app/home-page.html.twig',
                    ],
                ],
                3 => [
                    'name'     => 'Laminas View <comment>installs Laminas ServiceManager</comment>',
                    'packages' => [
                        'laminas/laminas-view',
                        'laminas/laminas-filter',
                        'laminas/laminas-i18n',
                        'laminas/laminas-servicemanager',
                    ],
                    'copy-files' => [
                        '/Resources/config/templates-laminas-view.php' => '/config/autoload/templates.global.php',
                        '/Resources/templates/laminas-view-404.phtml' => '/templates/error/404.phtml',
                        '/Resources/templates/laminas-view-error.phtml' => '/templates/error/error.phtml',
                        '/Resources/templates/laminas-view-layout.phtml' => '/templates/layout/default.phtml',
                        '/Resources/templates/laminas-view-home-page.phtml' => '/templates/app/home-page.phtml',
                    ],
                ],
            ],
        ],

        'error-handler' => [
            'question'       => 'Which error handler do you want to use during development?',
            'default'        => 1,
            'required'       => false,
            'custom-package' => true,
            'options'        => [
                1 => [
                    'name'     => 'Whoops',
                    'packages' => [
                        'filp/whoops',
                    ],
                    'copy-files' => [
                        '/Resources/config/error-handler-whoops.php' => '/config/autoload/errorhandler.local.php',
                    ],
                ],
            ],
        ],
    ],
];
