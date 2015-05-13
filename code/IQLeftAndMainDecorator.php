<?php




class IQLeftAndMainDecorator extends LeftAndMainExtension 
{
	function init() 
	{
		if (!Permission::check('ADMIN'))
		{
			Requirements::css('iq-security/css/iq-security.css');
		}
		Requirements::javascript('iq-security/javascript/iq-security.js');		
	}
	
}

?>