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

class Easylife_FloatingMessage_Block_Js extends Mage_Core_Block_Template {
    /**
     * config path to enabled flag
     */
    const XML_ENABLED       = 'easylife_floatingmessage/settings/enabled';
    /**
     * config path to show effect
     */
    const XML_SHOW_EFFECT   = 'easylife_floatingmessage/settings/show';
    /**
     * config path to hide effect
     */
    const XML_HIDE_EFFECT   = 'easylife_floatingmessage/settings/hide';
    /**
     * config path to timeout
     */
    const XML_TIMEOUT       = 'easylife_floatingmessage/settings/timeout';
    /**
     * config path to dom selector
     */
    const XML_SELECTOR      = 'easylife_floatingmessage/settings/selector';
    /**
     * config path to modal flag
     */
    const XML_MODAL         = 'easylife_floatingmessage/settings/modal';
    /**
     * config path to z-index
     */
    const XML_ZINDEX        = 'easylife_floatingmessage/settings/zindex';
    /**
     * config path to window positioning
     */
    const XML_POSITION      = 'easylife_floatingmessage/settings/position';
    /**
     * config path to theme select
     */
    const XML_STYLE         = 'easylife_floatingmessage/settings/style';

    /**
     * check if module enabled
     * @return bool
     */
    public function isEnabled() {
        return Mage::getStoreConfigFlag(self::XML_ENABLED);
    }

    /**
     * get config
     * @param bool $asJson
     * @return array
     */
    public function getConfig($asJson = false) {
        $config = array();
        $config['showEffect'] = Mage::getStoreConfig(self::XML_SHOW_EFFECT);
        $config['hideEffect'] = Mage::getStoreConfig(self::XML_HIDE_EFFECT);
        $config['timeout']    = Mage::getStoreConfig(self::XML_TIMEOUT);
        $config['selector']   = Mage::getStoreConfig(self::XML_SELECTOR);
        $config['modal']      = (int)Mage::getStoreConfigFlag(self::XML_MODAL);
        $config['zindex']     = (int)Mage::getStoreConfig(self::XML_ZINDEX);
        $config['position']   = Mage::getStoreConfig(self::XML_POSITION);
        $config['style']      = Mage::getStoreConfig(self::XML_STYLE);
        if ($asJson) {
            return Mage::helper('core')->jsonEncode($config);
        }
        return $config;
    }
}