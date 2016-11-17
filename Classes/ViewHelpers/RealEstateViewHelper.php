<?php

namespace Azurgruen\AzgrRealestate\ViewHelpers;

use \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper;
use \TYPO3\CMS\Extbase\Configuration\ConfigurationManagerInterface;
//use \Azurgruen\AzgrRealestate\Controller\ApartmentController;
//use \Azurgruen\AzgrRealestate\Controller\CondominiumController;


class RealestateViewHelper extends AbstractViewHelper {
	
	/**
     * condominiumRepository
     *
     * @var \Azurgruen\AzgrRealestate\Domain\Repository\CondominiumRepository
     * @inject
     */
    protected $condominiumRepository = null;
    
    /**
     * apartmentRepository
     *
     * @var \Azurgruen\AzgrRealestate\Domain\Repository\ApartmentRepository
     * @inject
     */
    protected $apartmentRepository = null;
    
    /**
     * ConfigurationManagerInterface
     *
     * @var \TYPO3\CMS\Extbase\Configuration\ConfigurationManagerInterface
     * @inject
     */
    protected $configurationManagerInterface = null;
	
	/**
	* Get Links and Name
	*
	* @param string $type
	*/
	public function render($type = '') {
		$configuration = $this->configurationManagerInterface->getConfiguration(ConfigurationManagerInterface::CONFIGURATION_TYPE_FULL_TYPOSCRIPT);
		$storagePid = $configuration['plugin.']['tx_azgrrealestate_realestate.']['persistence.']['storagePid'];
		if ($type === 'condominium') {
			$query = $this->condominiumRepository->createQuery();
			$query->getQuerySettings()->setStoragePageIds([$storagePid]);
			$result = $query->execute();
		} else if ($type === 'apartment') {
			$query = $this->apartmentRepository->createQuery();
			$query->getQuerySettings()->setStoragePageIds([$storagePid]);
			$result = $query->execute();
		}
		//\TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump($storagePid);
		return $result;
	}
	
}