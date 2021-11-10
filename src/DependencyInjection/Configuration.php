<?php

namespace MartenaSoft\WarehouseProductVendor\DependencyInjection;

use MartenaSoft\WarehouseProductVendor\ProductVendorBundle;
use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder(ProductVendorBundle::getConfigName());

        return $treeBuilder;
    }
}