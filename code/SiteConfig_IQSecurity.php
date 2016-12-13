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
            if (Permission::check('ADMIN')) {
                // get a list of all page types.
                $SubClasses = ClassInfo::getValidSubClasses('SiteTree');
                $ClassOptions = array();
                foreach ($SubClasses as $SubClass) {
                    if ($SubClass!='SiteTree') {
                        $ClassOptions[$SubClass] = $SubClass;
                    }
                }
                
                $fields->addFieldToTab("Root.Permissions", new CheckboxSetField("BlockPageTypes", "Block these page type so users cannot create", $ClassOptions));
            } else {
                $fields->removeByName('Access');
                $fields->removeFieldFromTab('Root.Main', 'Theme');
            }
        }
    }
