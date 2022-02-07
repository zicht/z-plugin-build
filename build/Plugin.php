<?php
/**
 * @copyright Zicht Online <https://zicht.nl>
 */

namespace Zicht\Tool\Plugin\Build;

use Symfony\Component\Config\Definition\Builder\ArrayNodeDefinition;
use Zicht\Tool\Plugin as BasePlugin;

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
            ->end()
        ;
    }
}