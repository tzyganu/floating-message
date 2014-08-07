Magento Floating Messages v1.0.0
================

What it does
----------

This is a small magento extension that enables you to make the error/success/notice/warning session messages appear as an overlay in the page.
This is the default mode Magento displays messages:
<img src="http://i.imgur.com/oRUZNSe.png" alt="default" />
This is after enabling the extension:
<img src="http://i.imgur.com/j0VdUQt.png" alt="floating" />

Compatibility
----------
The extension was tested on CE 1.7 to 1.9 but most probably works with older versions also.

Installation
-----------
Copy the extension files over your Magento instance so each folder overlaps with the correct magento folder.
`app` over `app` and `js` over `js`. nothing should be overwritten.
Clear the cache.

How to use:
----------
The extension is disabled by default so it won't affect your store.
To enable it go to `System->Configuration->Floating Messages->Settings` and set the `Enabled` flag to `Yes`.

After enabling it, you will also have access to some configuration settings.

 - `DOM Selector`. This represents the prototype element selector for the messages section. In case you are using a custom theme and you changed how the messages are printed you may need to modify this. It defaults to `$$('ul.messages')[0]`.
 - `Show Effect`. The effect used for showing the messages window.  See <a href="http://madrobby.github.io/scriptaculous/combination-effects/" target="_blank">http://madrobby.github.io/scriptaculous/combination-effects/</a> for more details.
 - `Hide Effect`. The effect used for hiding the messages window.  See <a href="http://madrobby.github.io/scriptaculous/combination-effects/" target="_blank">http://madrobby.github.io/scriptaculous/combination-effects/</a> for more details.
 - `Auto hide after x seconds`. It represents the value in seconds for when the window with the messages should disappear. If it's not filled in then the messages won't go away until the user makes it go away.
 - `Modal`. You can make the window with the messages be modal or not.
 - `Position`. You can position the window with the messages at the top of the page or in the center.
 - `Style`. You can select a theme for the windows. It supports the magento skin or the default prototype skin.

Developer
-----------
In case you are a developer and want to change something related to the floating messages you don't need each time to do an action that would generate a session message.
Just edit the `config.xml` of the module and uncomment the `<events>` section. This will make a set of messages to appear on every page refresh.
I didn't want to do this from the configuration section, because the event will still be observed even if the method did nothing. I didn't want any overhead on the page load.

Uninstall
--------
To uninstall the module remove the following files and folders:

 - `app/code/community/Easylife/FloatingMessage`
 - `app/design/frontend/base/default/layout/easylife_floatingmessage.xml`
 - `app/design/frontend/base/default/template/easylife_floatingmessage`
 - `app/locale/en_US/Easylife_FloatingMessage.csv`
 - `app/etc/modules/Easylife_FloatingMessage.xml`
 - `js/easylife_floatingmessage`

Limitations
---------
This extension does not make floating messages out of the messages generated through ajax calls (yet).

Issues
------
Please report any issue or request in <a href="https://github.com/tzyganu/floating-message/issues" target="_blank">here</a>.
