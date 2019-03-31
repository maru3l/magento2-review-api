<?php
/**
 * @package  Divante\ReviewApi
 * @author Agata Firlejczyk <afirlejczyk@divante.pl>
 * @copyright 2018 Divante Sp. z o.o.
 * @license See LICENSE_DIVANTE.txt for license details.
 */

namespace Divante\ReviewApi\Api;

/**
 * Interface ProductReviewInterface
 */
interface ProductReviewInterface
{
    /**
     * Get product reviews.
     *
     * @param string $sku
     * @return \Divante\ReviewApi\Api\Data\ReviewInterface[]
     */
    public function getList($sku);
}
