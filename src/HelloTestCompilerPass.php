<?php
/**
 * Created by PhpStorm.
 * User: Nas
 * Date: 13/12/2018
 * Time: 11:35
 */

namespace HelloTestBundle;


use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class HelloTestCompilerPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container)
    {
        // TODO: Implement process() method.
    }

}