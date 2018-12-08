<?php

namespace XLite\Module\Taka\ToolmatesWidgets\View;

/**
 * Class ProductVendorInfo
 * @ListChild (list="product.details.page.info", weight="18")
 */

class  ProductVendorInfo extends \XLite\View\AView{

    public static function getAllowedTargets() {
        $result[] = 'product';
        return $result;
    }

    public function getDefaultTemplate() {
        return 'skins/toolmate/customer/taka/link_to_ownerinfo.twig';
    }
}