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
class Easylife_FloatingMessage_Model_Source_Show {
    /**
     * get all possible hide effects
     * @return array
     */
    public function toOptionArray(){
        return array(
            'Effect.Appear'		=> Mage::helper('easylife_floatingmessage')->__('Appear'),
            'Effect.BlindDown'	=> Mage::helper('easylife_floatingmessage')->__('BlindDown'),
            'Effect.Grow'		=> Mage::helper('easylife_floatingmessage')->__('Grow'),
            'Effect.SlideDown'	=> Mage::helper('easylife_floatingmessage')->__('SlideDown'),
        );
    }

}