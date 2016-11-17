<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Extbase\Utility\LocalizationUtility;

class AzgrRealestateWizicon {

        /**
         * Processing the wizard items array
         *
         * @param array $wizardItems The wizard items
         * @return array Modified array with wizard items
         */
        function proc($wizardItems)     {
                $wizardItems['plugins_tx_azgrrealestate_realestate'] = array(
                        'icon' => ExtensionManagementUtility::extRelPath('azgr_realestate') . 'Resources/Public/Icons/wizard.png',
                        //'title' => $GLOBALS['LANG']->sL('LLL:EXT:examples/locallang.xlf:pierror_wizard_title'),
                        //'description' => $GLOBALS['LANG']->sL('LLL:EXT:examples/locallang.xlf:pierror_wizard_description'),
                        'title' => 'Immobilien',
                        'description' => 'Liste/Details von Wohnanlagen und Wohnungen',
                        'params' => '&defVals[tt_content][CType]=list&&defVals[tt_content][list_type]=azgrrealestate_realestate'
                );
                return $wizardItems;
        }
}

?>