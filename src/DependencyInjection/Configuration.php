<?php
/**
 * Created by PhpStorm.
 * User: Nas
 * Date: 13/12/2018
 * Time: 11:53
 */

namespace HelloTestBundle\DependencyInjection;


use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('hello_test');

//        $rootNode
//            ->children()
//            ->scalarNode('em')
//            ->isRequired()
//            ->cannotBeEmpty()
//            ->end()
//            ->end();

        return $treeBuilder;
    }

}