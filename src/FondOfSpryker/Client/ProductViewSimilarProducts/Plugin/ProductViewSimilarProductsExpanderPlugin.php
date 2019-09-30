<?php

namespace FondOfSpryker\Client\ProductViewSimilarProducts\Plugin;

use FondOfSpryker\Shared\ProductViewSimilarProducts\ProductViewSimilarProductsConstants;
use Generated\Shared\Search\PageIndexMap;
use Generated\Shared\Transfer\ProductViewTransfer;
use Spryker\Client\Kernel\AbstractPlugin;
use Spryker\Client\ProductStorageExtension\Dependency\Plugin\ProductViewExpanderPluginInterface;

/**
 * @method \FondOfSpryker\Client\ProductViewSimilarProducts\ProductViewSimilarProductsFactory getFactory()
 */
class ProductViewSimilarProductsExpanderPlugin extends AbstractPlugin implements ProductViewExpanderPluginInterface
{
    /**
     * @param \Generated\Shared\Transfer\ProductViewTransfer $productViewTransfer
     * @param array $productData
     * @param string $localeName
     *
     * @return \Generated\Shared\Transfer\ProductViewTransfer
     */
    public function expandProductViewTransfer(ProductViewTransfer $productViewTransfer, array $productData, $localeName): ProductViewTransfer
    {
        if (!array_key_exists(PageIndexMap::MODEL_KEY, $productViewTransfer->getAttributes())) {
            return $productViewTransfer;
        }

        if (!array_key_exists(PageIndexMap::STYLE_KEY, $productViewTransfer->getAttributes())) {
            return $productViewTransfer;
        }

        $searchParameters = [
            PageIndexMap::MODEL_KEY => $productViewTransfer->getAttributes()[PageIndexMap::MODEL_KEY],
            PageIndexMap::STYLE_KEY => $productViewTransfer->getAttributes()[PageIndexMap::STYLE_KEY],
            ProductViewSimilarProductsConstants::SORT_BY_SIZE => true,
        ];

        $results = $this->getFactory()
            ->getCatalogClient()
            ->catalogSearch('', $searchParameters);

        return $productViewTransfer->setSimilarProducts($results['products']);
    }
}
