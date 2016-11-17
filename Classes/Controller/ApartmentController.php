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
 * ApartmentController
 */
class ApartmentController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * apartmentRepository
     *
     * @var \Azurgruen\AzgrRealestate\Domain\Repository\ApartmentRepository
     * @inject
     */
    protected $apartmentRepository = null;
    
    /**
     * action index
     *
     * @param \Azurgruen\AzgrRealestate\Domain\Model\Apartment $apartment
     * @return void
     *
     * @ignorevalidation $apartment
     */
    public function indexAction()
    {
	    
	    if ($this->request->hasArgument('apartment')) {
	        if ($apartment = $this->apartmentRepository->findByUid(
	            intval($this->request->getArgument('apartment'))
	         )) {
		        for ($i=1; $i<=$apartment->getCountRooms(); $i++) {
			        $apartment->rooms[] = $apartment->getRoom($i);
		        }
		        $apartments = $this->apartmentRepository->findAll();
		        $active = $apartment->getUid();
		       
	            //$this->request->setArgument('apartment', $apartment);
	            //$this->forward('show');
	            //\TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump(get_class_methods($GLOBALS['TSFE']));
	            // disable cache if no cHash parameter is available
				//$GLOBALS['TSFE']->reqCHash();
	            $GLOBALS['TSFE']->page['title'] = $apartment->getName();
	            //$this->forward('list');
		        $this->view->assign('apartments', $apartments);
		        $this->view->assign('activeApartment', $apartment);
		        $this->view->assign('active', $active);
		        $this->view->assign('pid', $GLOBALS['TSFE']->id);
	        }
	    } else {
		    $apartment = $this->apartmentRepository->findAll()[0];
	        $this->request->setArgument('apartment', $apartment);
	        $uriBuilder = $this->getControllerContext()->getUriBuilder();
	        $uriBuilder->reset();
			$uriBuilder->setArguments([
				'tx_azgrrealestate_realestate' => [
					'apartment' => $apartment->getUid(),
					'controller' => 'Apartment',
					'action' => 'index'
				]
			]);
			$uri = $uriBuilder->setAddQueryString(TRUE)->buildFrontendUri();
	        $this->redirectToUri($uri);
	    }
	    

    }
 
}
