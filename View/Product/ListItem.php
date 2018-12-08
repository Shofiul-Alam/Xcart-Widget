<?php

namespace XLite\Module\Taka\ToolmatesWidgets\View\Product;

abstract class ListItem extends \XLite\View\Product\ListItem implements \XLite\Base\IDecorator {
    /**
     * Get add2cart block widget
     *
     * @return \XLite\View\AView
     */
    protected function getAdd2CartBlockWidget()
    {
        $widget = null;

        if ($this->getProduct()->isOutOfStock()) {
            $widget = $this->getWidget(
                array(
                    'style'     => 'out-of-stock',
                    'label'     => 'Out of stock',
                ),
                'XLite\View\Button\Simple'
            );
        } else {
            $widget = $this->getWidget(
                array(
                    'style'     => 'add-to-cart product-add2cart productid-' . $this->getProduct()->getProductId(),
                    'label'     => 'Hire now',
                ),
                'XLite\View\Button\Simple'
            );
        }

        return $widget;
    }
}
?>