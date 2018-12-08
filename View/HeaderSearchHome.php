<?php

namespace XLite\Module\Taka\ToolmatesWidgets\View;



class HeaderSearchHome extends \XLite\View\AView {

    public static function getAllowedTargets() {
        $result[] ='main';
        return $result;
    }

    public function getDefaultTemplate() {
        return 'modules/Taka/ToolmatesWidgets/Home/header_search_home.twig';
    }


}