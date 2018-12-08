<?php

namespace XLite\Module\Taka\ToolmatesWidgets\View\Filter;

/**
 * Class Brand
 * @ListChild (list="sidebar.filter", weight="291", zone='customer')
 */

class Brand extends \XLite\View\AView
{


    public function getDefaultTemplate()
    {

        return 'modules/Taka/ToolmatesWidgets/Filter/brand.twig';
    }

    public function getBrandsName()
    {

        $brands = array();

        $allBrand = \XLite\Core\Database::getRepo('\XLite\Module\Shofi\ToolListing\Model\Product\ProductDetails')->createQueryBuilder('b')
            ->select('b.brand')
            ->groupBy('b.brand')
            ->getResult();



        foreach ($allBrand as $key=>$brand) {
            if (!empty($brand['brand'])) {
                array_push($brands, $brand['brand']);
            }

        }


        return $brands;

    }
}