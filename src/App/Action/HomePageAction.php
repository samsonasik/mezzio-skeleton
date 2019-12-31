<?php

namespace App\Action;

use Laminas\Diactoros\Response\HtmlResponse;
use Laminas\Diactoros\Response\JsonResponse;
use Mezzio\Router\AuraRouter;
use Mezzio\Router\FastRouteRouter;
use Mezzio\Router\LaminasRouter;
use Mezzio\Router\RouterInterface;
use Mezzio\Template\TemplateInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class HomePageAction extends AbstractAction
{
    public function __invoke(ServerRequestInterface $request, ResponseInterface $response, callable $next = null)
    {
        if (!$this->getContainer()->has(TemplateInterface::class)) {
            return new JsonResponse([
                'welcome' => 'Congratulations! You have installed the mezzio skeleton application',
                'docs' => 'https://mezzio.readthedocs.org/en/latest/'
            ]);
        }

        $data = [];

        $router = $this->getContainer()->get(RouterInterface::class);
        if ($router instanceof AuraRouter) {
            $data['routerDocsUrl'] = 'https://mezzio.readthedocs.org/en/latest/router/aura/';
            $data['routerName'] = 'Aura.Router';
            $data['routerExtUrl'] = 'http://auraphp.com/packages/Aura.Router/';
        } elseif ($router instanceof FastRouteRouter) {
            $data['routerDocsUrl'] = 'https://mezzio.readthedocs.org/en/latest/router/fast-route/';
            $data['routerName'] = 'FastRoute';
            $data['routerExtUrl'] = 'https://github.com/nikic/FastRoute';
        } elseif ($router instanceof LaminasRouter) {
            $data['routerDocsUrl'] = 'https://mezzio.readthedocs.org/en/latest/router/laminas/';
            $data['routerName'] = 'Laminas Router';
            $data['routerExtUrl'] = 'https://docs.laminas.dev/laminas.mvc.routing.html';
        }

        return new HtmlResponse($this->getRenderer()->render('app::home-page', $data));
    }
}
