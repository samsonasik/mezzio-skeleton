<?php

use Laminas\ServiceManager\Config;
use Laminas\ServiceManager\ServiceManager;

$config = [];
foreach (glob('config/autoload/{{,*.}global,{,*.}local}.php', GLOB_BRACE) as $file) {
    $config = array_replace_recursive($config, include $file);
}

if (isset($config['strict_php'])) {
    StrictPhp\StrictPhpKernel::getInstance()->init($config['strict_php']);
}

$container = new ServiceManager(new Config($config['dependencies']));
$container->setService('Config', $config);

return $container;
