<?php

namespace FondOfSpryker\Client\ProductViewSimilarProducts;

use FondOfSpryker\Client\ProductViewSimilarProducts\Dependency\Client\ProductViewSimilarProductsToCatalogClientInterface;
use Spryker\Client\Kernel\AbstractFactory;

class ProductViewSimilarProductsFactory extends AbstractFactory
{
    /**
     * @return \FondOfSpryker\Client\ProductViewSimilarProducts\Dependency\Client\ProductViewSimilarProductsToCatalogClientInterface
     */
    public function getCatalogClient(): ProductViewSimilarProductsToCatalogClientInterface
    {
        return $this->getProvidedDependency(ProductViewSimilarProductsDependencyProvider::CLIENT_CATALOG);
    }

    /**
     * @return \FondOfSpryker\Client\ProductViewSimilarProducts\ProductViewSimilarProductsConfig
     */
    public function getProductViewSimilarProductsConfig(): ProductViewSimilarProductsConfig
    {
        return $this->getConfig();
    }
}
