<?php

namespace App\Container;

use Interop\Container\ContainerInterface;
use Pimple\Container as Pimple;

/**
 * ContainerInterface wrapper for Pimple 3.0
 *
 * @package App\Container
 */
class PimpleContainer extends Pimple implements ContainerInterface
{
    public function get($id)
    {
        return $this->offsetGet($id);
    }

    public function has($id)
    {
        return $this->offsetExists($id);
    }
}
