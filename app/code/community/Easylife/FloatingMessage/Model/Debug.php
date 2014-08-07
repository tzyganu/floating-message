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
class Easylife_FloatingMessage_Model_Debug {
    /**
     * add all dummy debug messages
     */
    public function addAll() {
        $this->addSuccess();
        $this->addError();
        $this->addNotice();
        $this->addWarning();
    }

    /**
     * add a success message
     * @return $this
     */
    public function addSuccess() {
        $this->_getSession()->addSuccess($this->_getMessage('success'));
        return $this;
    }
    /**
     * add a success message
     * @return $this
     */
    public function addError() {
        $this->_getSession()->addError($this->_getMessage('error'));
        return $this;
    }
    /**
     * add a success message
     * @return $this
     */
    public function addNotice() {
        $this->_getSession()->addNotice($this->_getMessage('notice'));
        return $this;
    }
    /**
     * add a success message
     * @return $this
     */
    public function addWarning() {
        $this->_getSession()->addWarning($this->_getMessage('warning'));
        return $this;
    }
    /**
     * get the session object
     * @return Mage_Core_Model_Session
     */
    protected function _getSession() {
        return Mage::getSingleton('core/session');
    }

    /**
     * get the message
     * @param $type
     * @return string
     */
    protected function _getMessage($type) {
        return Mage::helper('easylife_floatingmessage')->__('This is a dummy %s message', $type);
    }
}