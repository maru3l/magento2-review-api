<?php
/**
 * @package  Divante\ReviewApi
 * @author Agata Firlejczyk <afirlejczyk@divante.pl>
 * @copyright 2018 Divante Sp. z o.o.
 * @license See LICENSE_DIVANTE.txt for license details.
 */

namespace Divante\ReviewApi\Api;

use Divante\ReviewApi\Api\Data\ReviewInterface;

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

	/**
     * Set product review.
     *
	 * @param \Divante\ReviewApi\Api\Data\ReviewInterface $review
	 * @param string $sku
     * @param string|null $customerId
     * @return \Divante\ReviewApi\Api\Data\ReviewInterface
	 * @throws \Magento\Framework\Exception\CouldNotSaveException
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
	// public function save(ReviewInterface $review, $sku, $customerId = null);
}
