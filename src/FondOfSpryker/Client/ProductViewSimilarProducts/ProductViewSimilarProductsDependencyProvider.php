<?php

namespace FondOfSpryker\Client\ProductViewSimilarProducts;

use FondOfSpryker\Client\ProductViewSimilarProducts\Dependency\Client\ProductViewSimilarProductsToCatalogClientBridge;
use Spryker\Client\Kernel\AbstractDependencyProvider;
use Spryker\Client\Kernel\Container;

class ProductViewSimilarProductsDependencyProvider extends AbstractDependencyProvider
{
    public const CLIENT_CATALOG = 'CLIENT_CATALOG';

    /**
     * @return void
     */
    public function provideServiceLayerDependencies(Container $container)
    {
        $this->addCatalogClient($container);
    }

    /**
     * @param \Spryker\Client\Kernel\Container $container
     *
     * @return \Spryker\Client\Kernel\Container
     */
    protected function addCatalogClient(Container $container): Container
    {
        $container[self::CLIENT_CATALOG] = function (Container $container) {
            return new ProductViewSimilarProductsToCatalogClientBridge(
                $container->getLocator()->catalog()->client()
            );
        };

        return $container;
    }
}
