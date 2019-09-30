<?php

namespace FondOfSpryker\Shared\ProductViewSimilarProducts;

interface ProductViewSimilarProductsConstants
{
    public const CROSS_SELLING_MODELS_FILTER_SIZE = 'CROSS_SELLING_MODELS_FILTER_SIZE';

    public const CROSS_SELLING_PRODUCTS_DEFAULT_SIZE = 'CROSS_SELLING_PRODUCTS_DEFAULT_SIZE';

    public const CROSS_SELLING_PRODUCTS_DEFAULT_SIZE_VALUE = 'S';

    public const CROSS_SELLING_PRODUCTS_FILTER_SIZE_FOR = 'CROSS_SELLING_PRODUCTS_FILTER_SIZE_FOR';

    public const CROSS_SELLING_PRODUCTS_FILTER_SIZE_FOR_VALUES = [
        'crawling_shoe',
        'barefoot_shoe',
    ];

    public const MODEL_KEYS_FOR_SIZE_FILTER = 'MODEL_KEYS_FOR_SIZE_FILTER';

    public const SORT_BY_SIZE = 'sort_by_size';
}
