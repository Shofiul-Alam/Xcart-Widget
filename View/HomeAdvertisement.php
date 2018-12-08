<?php

namespace XLite\Module\Taka\ToolmatesWidgets\View;

/**
 * Class HomeAdvertisement
 * @ListChild (list="center.bottom", zone="customer", weight="400")
 */

class HomeAdvertisement extends \XLite\View\AView {

    public static function getAllowedTargets() {
        $result[] ='main';
        return $result;
    }

    public function getDefaultTemplate() {
        return 'modules/Taka/ToolmatesWidgets/Home/home_advertisement.twig';
    }

}