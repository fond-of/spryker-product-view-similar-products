<?php

namespace FondOfSpryker\Client\ProductViewSimilarProducts;

use FondOfSpryker\Shared\ProductViewSimilarProducts\ProductViewSimilarProductsConstants;
use Spryker\Client\Kernel\AbstractBundleConfig;

class ProductViewSimilarProductsConfig extends AbstractBundleConfig
{
    /**
     * @return array
     */
    public function getModelsFilterSize(): array
    {
        return $this->get(ProductViewSimilarProductsConstants::CROSS_SELLING_MODELS_FILTER_SIZE, []);
    }

    /**
     * @return string
     */
    public function getDefaultSize(): string
    {
        return $this->get(
            ProductViewSimilarProductsConstants::CROSS_SELLING_PRODUCTS_DEFAULT_SIZE,
            ProductViewSimilarProductsConstants::CROSS_SELLING_PRODUCTS_DEFAULT_SIZE_VALUE
        );
    }

    /**
     * @return array
     */
    public function getModelKeysForSizeFilter(): array
    {
        return $this->get(ProductViewSimilarProductsConstants::MODEL_KEYS_FOR_SIZE_FILTER, ProductViewSimilarProductsConstants::CROSS_SELLING_PRODUCTS_FILTER_SIZE_FOR_VALUES);
    }
}
