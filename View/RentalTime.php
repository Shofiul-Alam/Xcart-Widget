<?php

namespace XLite\Module\Taka\ToolmatesWidgets\View;

class RentalTime extends \XLite\View\AView {

    /**
     * Returns the number of nights in the selected booking period.
     *
     * @return integer
     */
    protected function getNumberOfNights()
    {
        return \XLite\Module\QSL\Booking\Core\Booking::getInstance()->getNumberOfSelectedDays();
    }

    public function getDefaultTemplate() {
        return 'modules/Taka/ToolmatesWidgets/Product/RentalTime.twig';
    }
}

?>