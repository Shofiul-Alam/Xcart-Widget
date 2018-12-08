<?php

namespace XLite\Module\Taka\ToolmatesWidgets\View;


class CategoryInfo extends \XLite\View\AView {

    /**
     * Return list of targets allowed for this widget
     *
     * @return array
     */
    public static function getAllowedTargets()
    {
        $result = parent::getAllowedTargets();
        $result[] = 'category';

        return $result;
    }

    /**
     * Check widget visibility
     *
     * @return boolean
     */
    protected function isVisible()
    {
        if($this->getTarget() == 'category') {
            return true;
        } else {
            false;
        }

    }

    /**
     * Return widget default template
     *
     * @return string
     */
    protected function getDefaultTemplate()
    {
        return 'layout/content/category_info.twig';
    }


    protected function getCategoryPageIcon() {


        $cat = $this->getCategory();
        $img = $cat? $cat->getImage() : null;

        if($img != null) {

            return $img->getUrl();

        } else
        {
            return false;
        }
    }
}