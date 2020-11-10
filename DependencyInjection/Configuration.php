<?php

namespace ICS\InstallBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{

    public function getConfigTreeBuilder()
    {
        $treebuilder = new TreeBuilder('install');

        // $treebuilder->getRootNode()
        // ;

        return $treebuilder;
    }


}