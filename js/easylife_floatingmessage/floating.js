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

if(typeof Easylife=='undefined') {
    var Easylife = {};
}
Easylife.FloatingMessage = Class.create();
Easylife.FloatingMessage.prototype = {
    initialize: function(config) {
        this.config = Object.extend({
            selector    : "$$('ul.messages')[0]",
            modal       : 1,
            showEffect  : "Effect.SlideDown",
            hideEffect  : "Effect.SlideUp",
            timeout     : 0,
            zindex      : 1000,
            position    : 'top',
            style       : 'magento'
        }, config);
        this.run();
    },
    run: function(){
        var elem = eval(this.config.selector);
        if (typeof elem != "undefined") {
            var d = Element.getDimensions(elem);
            var dim = document.viewport.getDimensions();
            var win = new Window({
                className: this.config.style,
                maximizable: false,
                resizable: false,
                minimizable:false,
                destroyOnClose: false,
                width: d.width,
                height: d.height,
                top: 0,
                hideEffect:eval(this.config.hideEffect),
                showEffect:eval(this.config.showEffect)
            });
            win.setContent(elem, false, false);
            win.setZIndex(this.config.zindex);
            if (this.config.position == 'top') {
                win.setLocation(0, (dim.width - win.width) / 2);
                win.show(this.config.modal);
            }
            else {
                win.showCenter(this.config.modal);
            }
            if (this.config.timeout) {
                setTimeout(function(){win.close()}, this.config.timeout * 1000);
            }
        }
    }
}
