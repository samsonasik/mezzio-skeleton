<?php

namespace App\Action;

use Interop\Container\ContainerInterface;
use Mezzio\Router\RouterInterface;
use Mezzio\Template\TemplateInterface;

class HomePageFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $router   = $container->get(RouterInterface::class);
        $template = ($container->has(TemplateInterface::class)) ? $container->get(TemplateInterface::class) : null;

        return new HomePageAction($router, $template);
    }
}
