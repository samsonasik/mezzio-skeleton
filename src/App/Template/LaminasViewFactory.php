<?php

namespace App\Template;

use Interop\Container\ContainerInterface;
use Laminas\View\Renderer\PhpRenderer;
use Laminas\View\Resolver;
use Mezzio\Template\LaminasView;

class LaminasViewFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $config = $container->get('config');

        // Configuration
        $resolver = new Resolver\AggregateResolver();
        $resolver->attach(
            new Resolver\TemplateMapResolver($config['templates']['map']),
            100
        );

        /*
        $resolver->attach(
            (new Resolver\TemplatePathStack())
                ->setPaths($config['templates']['paths'])
        );*/

        // Create the renderer
        $renderer = new PhpRenderer();
        $renderer->setResolver($resolver);

        // Inject renderer
        $view = new LaminasView($renderer, 'layout/default');

        // Add template paths
        foreach ($config['templates']['paths'] as $path => $namespace) {
            $view->addPath($path, $namespace);
        }

        return $view;
    }
}
