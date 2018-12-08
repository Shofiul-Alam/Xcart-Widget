<?php

namespace XLite\Module\Taka\ToolmatesWidgets\View;


class CategoryBanner extends \XLite\View\CategoryBanner implements \XLite\Base\IDecorator {

    /**
     * Return list of targets allowed for this widget
     *
     * @return array
     */
    public static function getAllowedTargets()
    {
        $result = parent::getAllowedTargets();
        $result[] = 'search';

        return $result;
    }

    /**
     * Check widget visibility
     *
     * @return boolean
     */
    protected function isVisible()
    {
        if($this->getTarget() == 'search') {
            return true;
        } else {
            return parent::isVisible();
        }

    }
}