<?php
	
	class SiteConfig_IQSecurity extends DataExtension 
	{
	
		private static $db = array(
			'BlockPageTypes' => 'Text'
		);
		
		private static $defaults = array(
			'BlockPageTypes' => 'BlogPage,FormPage,HomePage,ErrorPage,VirtualPage'
		);
		
		public function updateCMSFields(FieldList $fields) 
		{
			$fields->removeFieldFromTab('Root.Main','Theme');
			$fields->removeByName('Access');
			
			if (Permission::check('ADMIN'))
			{
				$tab = $fields->findOrMakeTab('Root.Developer.Permissions');
				// get a list of all page types.
				$SubClasses = ClassInfo::getValidSubClasses('SiteTree');
				$ClassOptions = array();
				foreach($SubClasses as $SubClass)
				{
					if ($SubClass!='SiteTree') $ClassOptions[$SubClass] = $SubClass;
				}
				
				$tab->push(CheckboxSetField::create("BlockPageTypes", "Block these page type so users cannot create",$ClassOptions));
			}
		}
		
	}