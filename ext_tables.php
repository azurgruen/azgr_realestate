<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function($extKey)
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Azurgruen.AzgrRealestate',
            'Realestate',
            'Immobilien'
        );

        $pluginSignature = str_replace('_', '', $extKey) . '_realestate';
        
        $GLOBALS['TBE_MODULES_EXT']['xMOD_db_new_content_el']['addElClasses']['AzgrRealestateWizicon'] = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($extKey) . 'Classes/Helper/AzgrRealestateWizicon.php';
        
        $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist'][$pluginSignature] = 'layout,select_key,recursive';
        $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:' . $extKey . '/Configuration/FlexForms/flexform_realestate.xml');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($extKey, 'Configuration/TypoScript', 'Immobilien');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_azgrrealestate_domain_model_condominium', 'EXT:azgr_realestate/Resources/Private/Language/locallang_csh_tx_azgrrealestate_domain_model_condominium.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_azgrrealestate_domain_model_condominium');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_azgrrealestate_domain_model_apartment', 'EXT:azgr_realestate/Resources/Private/Language/locallang_csh_tx_azgrrealestate_domain_model_apartment.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_azgrrealestate_domain_model_apartment');

    },
    $_EXTKEY
);
