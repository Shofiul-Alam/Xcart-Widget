<?php
// vim: set ts=4 sw=4 sts=4 et:

namespace XLite\Module\Taka\ToolmatesWidgets\View\Product\Details\Customer;

abstract class BookButton extends XLite\Module\QSL\Booking\View\Product\Details\Customer\BookButton implements \XLite\Base\IDecorator {
    /**
     * Returns label for the button.
     *
     * @return string
     */
    protected function getButtonTitle()
    {
        return static::t('Hire Now');
    }
}

?>