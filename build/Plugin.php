<?php
/**
 * @author Gerard van Helden <gerard@zicht.nl>
 * @copyright Zicht Online <http://zicht.nl>
 */
namespace Zicht\Tool\Plugin\Build;

use \Zicht\Tool\Plugin as BasePlugin;
use \Zicht\Tool\Container\ContainerBuilder;
use \Symfony\Component\Config\Definition\Builder\ArrayNodeDefinition;
use \Zicht\Tool\Container\Container;

class Plugin extends BasePlugin
{
    public function appendConfiguration(ArrayNodeDefinition $rootNode)
    {
        $rootNode
            ->children()
                ->arrayNode('build')
                    ->children()
                        ->scalarNode('dir')->end()
                    ->end()
                ->end()
                ->variableNode('setup')->end()
            ->end()
        ;
    }
}