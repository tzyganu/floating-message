<?php
/**
 * Easylife_FloatingMessage extension
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the MIT License
 * that is bundled with this package in the file LICENSE_EASYLIFE_FLOATING_MESSAGE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/mit-license.php
 *
 * @category       Easylife
 * @package        Easylife_FloatingMessage
 * @copyright      Copyright (c) 2014
 * @license        http://opensource.org/licenses/mit-license.php MIT License
 */
class Easylife_FloatingMessage_Model_Source_Position {
    /**
     * get all possible positions
     * @return array
     */
    public function toOptionArray(){
        return array(
            'top'        => Mage::helper('easylife_floatingmessage')->__('Top of the page'),
            'center'     => Mage::helper('easylife_floatingmessage')->__('Center of the page'),
        );
    }

}