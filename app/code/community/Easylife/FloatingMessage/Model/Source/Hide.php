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
class Easylife_FloatingMessage_Model_Source_Hide {
    /**
     * get all possible hide effects
     * @return array
     */
    public function toOptionArray(){
        return array(
            'Effect.Fade'		=> Mage::helper('easylife_floatingmessage')->__('Fade'),
            'Effect.BlindUp'	=> Mage::helper('easylife_floatingmessage')->__('BlindUp'),
            'Effect.Puff'		=> Mage::helper('easylife_floatingmessage')->__('Puff'),
            'Effect.Shrink'		=> Mage::helper('easylife_floatingmessage')->__('Shrink'),
            'Effect.SlideUp'	=> Mage::helper('easylife_floatingmessage')->__('SlideUp'),
            'Effect.Squish'		=> Mage::helper('easylife_floatingmessage')->__('Squish'),
            'Effect.SwitchOff'	=> Mage::helper('easylife_floatingmessage')->__('SwitchOff'),
            'Effect.DropOut'	=> Mage::helper('easylife_floatingmessage')->__('DropOut'),
        );
    }


}