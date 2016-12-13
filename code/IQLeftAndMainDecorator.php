<?php




class IQLeftAndMainDecorator extends LeftAndMainExtension
{
    public function init()
    {
        if (!Permission::check('ADMIN')) {
            Requirements::css('iq-security/css/iq-security.css');
        }
        Requirements::javascript('iq-security/javascript/iq-security.js');
    }
}
