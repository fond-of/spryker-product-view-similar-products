<?php

namespace FondOfSpryker\Client\ProductViewSimilarProducts\Dependency\Client;

interface ProductViewSimilarProductsToCatalogClientInterface
{
    /**
     * @param string $searchString
     * @param array $requestParameters
     *
     * @return array
     */
    public function catalogSearch(string $searchString, array $requestParameters): array;
}
