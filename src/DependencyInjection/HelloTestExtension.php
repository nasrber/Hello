<?php
/**
 * Created by PhpStorm.
 * User: Nas
 * Date: 13/12/2018
 * Time: 11:50
 */

namespace HelloTestBundle\DependencyInjection;


use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

class HelloTestExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);
        //dump($config);

        try {
            $loader = new YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
            $loader->load('services.yaml');
        } catch (\Exception $e) {

        }


        //die();

    }

}