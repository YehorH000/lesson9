<?php
declare(strict_types=1);


namespace DvCampus\Catalog\Block\Product\View;

use Magento\Tests\NamingConvention\true\float;
use Magento\Tests\NamingConvention\true\string;

/**
 *Class Demo
 *
 * @package DvCampus\Catalog\Block]Product\View
 */

class Demo extends \Magento\Catalog\Block\Product\View
{

    /**
     * @return float
     */
    public function getProductSalableQty(): float
    {
        return$this->getProduct()->getQty();
    }

    /**
     * @return string
     */
    public function getProductName(): string
    {
        return $this->getProduct()->getName();
    }

}
