<?php
namespace Azurgruen\AzgrRealestate\Hooks;

use \TYPO3\CMS\Core\Utility\GeneralUtility;
use \TYPO3\CMS\Extbase\Configuration\ConfigurationManagerInterface;

/**
 * Process field data before saving to database
 */
class ProcessDatamapHook {
	
	public function processDatamap_preProcessFieldArray( array &$fieldArray, $table, $id, \TYPO3\CMS\Core\DataHandling\DataHandler &$pObj ) {
		if (
			$table === 'tx_azgrrealestate_domain_model_condominium' ||
			$table === 'tx_azgrrealestate_domain_model_apartment'
		) {
			$this->setLatLng($fieldArray);
		}
		if ($table === 'tx_azgrrealestate_domain_model_apartment') {
			$this->setTotals($fieldArray);
		}
	}
	
	/**
     * Set total sqm/prices
     *
     * @return void
     */
    public function setTotals(array &$fieldArray)
    {
	    if ($fieldArray['rent_base'] > 0 && $fieldArray['rent_addition'] > 0) {
		    $fieldArray['rent_total'] = $fieldArray['rent_base'] + $fieldArray['rent_addition'];
	    }
	    if ($fieldArray['count_rooms'] > 0) {
		    //\TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump($fieldArray['sqm_total']);
			$fieldArray['sqm_total'] = 0.00;
			for ($i=1; $i<=$fieldArray['count_rooms']; $i++) {
				$fieldArray['sqm_total'] += floatval($fieldArray['sqm_room_'.$i]);
			}
		}
    }
	
	/**
     * Set lat/lng
     *
     * @return void
     */
    public function setLatLng(array &$fieldArray)
    {
	    if (
	    	!empty($fieldArray['street']) &&
	    	!empty($fieldArray['street_number']) &&
			!empty($fieldArray['zip']) &&
			!empty($fieldArray['city'])
	    ) {
		    $location = $this->getLocationData(
				$fieldArray['street'],
				$fieldArray['street_number'],
				$fieldArray['zip'],
				$fieldArray['city']
			);
			$fieldArray['lat'] = $location['results'][0]['geometry']['location']['lat'];
			$fieldArray['lng'] = $location['results'][0]['geometry']['location']['lng'];
		}
    }
	
	/**
     * Returns location data
     *
     * @return array $location
     */
    public function getLocationData($street, $streetNumber, $zip, $city)
    {
	    $url = 'https://maps.googleapis.com/maps/api/geocode/json?address=%s&key=%s';
	    $key = $this->getApiKey();
	    $address = urlencode($street.' '.$streetNumber.', '.$zip.' '.$city);
		$url = sprintf($url, $address, $key);
		$result = file_get_contents($url);
		$location = json_decode($result, true);
	    //\TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump($location);
        return $location;
    }
    
    /**
     * Get api key from typoscript
     *
     * @return string $apikey
     */
    public function getApiKey()
    {
	   $objectManager = GeneralUtility::makeInstance('TYPO3\\CMS\\Extbase\\Object\\ObjectManager');
		$ConfigurationManagerInterface = $objectManager->get('TYPO3\\CMS\\Extbase\\Configuration\\ConfigurationManagerInterface');
		$settings = $ConfigurationManagerInterface->getConfiguration(ConfigurationManagerInterface::CONFIGURATION_TYPE_FULL_TYPOSCRIPT);
		$apikey = ($settings['plugin.']['tx_azgrrealestate_realestate.']['settings.']['apikey']);
		if (!$apikey) $apikey = '';
        return $apikey;
    }
	
}