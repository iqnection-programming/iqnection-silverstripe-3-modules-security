<?php




class IQLeftAndMainDecorator extends LeftAndMainExtension {
	
	
	function init() 
	{
		//if (!Permission::check('ADMIN'))
		{
			Requirements::javascript('iq-security/javascript/iq-security.js');
			Requirements::css('iq-security/css/iq-security.css');
		}		
	}
}

?>