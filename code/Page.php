<?php


	class IQSecurity_Page extends Extension
	{
		function canCreate($Member=null)
		{			
			$SiteConfig = DataObject::get_one('SiteConfig');
			if (in_array($this->owner->ClassName,explode(',',$SiteConfig->BlockPageTypes))) return false;
			return true;
		}
	}