<?php
namespace Azurgruen\AzgrRealestate\Controller;

/***
 *
 * This file is part of the "Immobilien" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2016 Bernhard Schütz <schuetz@azurgruen.de>, azurgruen // code + design
 *
 ***/

/**
 * CondominiumController
 */
class CondominiumController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * condominiumRepository
     *
     * @var \Azurgruen\AzgrRealestate\Domain\Repository\CondominiumRepository
     * @inject
     */
    protected $condominiumRepository = null;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
	    if ($this->request->hasArgument('apartment')) {
		    $active = $this->request->getArgument('apartment');
		} else {
			$active = 0;
		}
        $condominia = $this->condominiumRepository->findAll();
        $this->view->assign('condominia', $condominia);
        $this->view->assign('active', $active);
        $this->view->assign('pid', $GLOBALS['TSFE']->id);
    }
    
    /**
     * action selectbox
     *
     * @return void
     */
    public function selectboxAction()
    {
        $condominia = $this->condominiumRepository->findAll();
        $this->view->assign('condominia', $condominia);
    }

    /**
     * action show
     *
     * @param \Azurgruen\AzgrRealestate\Domain\Model\Condominium $condominium
     * @return void
     * @ignorevalidation $condominium
     */
    public function showAction(\Azurgruen\AzgrRealestate\Domain\Model\Condominium $condominium = NULL)
    {
/*
	    $condominium->setPublicTransportSuburbanLine(
		    explode(',', $condominium->getPublicTransportSuburbanLine())
	    );
	    $condominium->setPublicTransportSuburbanStation(
		    explode(',', $condominium->getPublicTransportSuburbanStation())
	    );
	    $condominium->setPublicTransportMetroLine(
		    explode(',', $condominium->getPublicTransportMetroLine())
	    );
	    $condominium->setPublicTransportMetroStation(
		    explode(',', $condominium->getPublicTransportMetroStation())
	    );
	    $condominium->setPublicTransportTramLine(
		    explode(',', $condominium->getPublicTransportTramLine())
	    );
	    $condominium->setPublicTransportTramStation(
		    explode(',', $condominium->getPublicTransportTramStation())
	    );
	    $condominium->setPublicTransportBusLine(
		    explode(',', $condominium->getPublicTransportBusLine())
	    );
	    $condominium->setPublicTransportBusStation(
		    explode(',', $condominium->getPublicTransportBusStation())
	    );
*/
	    
        $GLOBALS['TSFE']->page['title'] = $condominium->getName();
        //\TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump($condominium);
        $this->view->assign('condominium', $condominium);
    }
}
