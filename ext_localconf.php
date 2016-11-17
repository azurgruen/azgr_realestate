<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function($extKey)
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Azurgruen.AzgrRealestate',
            'Realestate',
            [
                'Condominium' => 'list, show, selectbox',
                'Apartment' => 'index'
            ],
            // non-cacheable actions
            [
                'Condominium' => '',
                'Apartment' => ''
            ]
        );
        
        // register hook
        $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][] = \Azurgruen\AzgrRealestate\Hooks\ProcessDatamapHook::class;
        
        

    },
    $_EXTKEY
);
## EXTENSION BUILDER DEFAULTS END TOKEN - Everything BEFORE this line is overwritten with the defaults of the extension builder