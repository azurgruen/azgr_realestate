<?php
namespace Azurgruen\AzgrRealestate\Domain\Model;

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
 * Apartment
 */
class Apartment extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * name
     *
     * @var string
     */
    protected $name = '';
    
    /**
     * navtitle
     *
     * @var string
     */
    protected $navtitle = '';

    /**
     * street
     *
     * @var string
     */
    protected $street = '';

    /**
     * streetNumber
     *
     * @var string
     */
    protected $streetNumber = '';

    /**
     * zip
     *
     * @var string
     */
    protected $zip = '';

    /**
     * city
     *
     * @var string
     */
    protected $city = '';

    /**
     * will be populated automatically
     *
     * @var float
     */
    protected $lat = 0.000000;

    /**
     * will be populated automatically
     *
     * @var float
     */
    protected $lng = 0.000000;

    /**
     * images
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference>
     * @cascade remove
     */
    protected $images = null;

    /**
     * publicTransportSuburbanLine
     *
     * @var string
     */
    protected $publicTransportSuburbanLine = '';

    /**
     * publicTransportSuburbanStation
     *
     * @var string
     */
    protected $publicTransportSuburbanStation = '';

    /**
     * publicTransportMetroLine
     *
     * @var string
     */
    protected $publicTransportMetroLine = '';

    /**
     * publicTransportMetroStation
     *
     * @var string
     */
    protected $publicTransportMetroStation = '';

    /**
     * publicTransportTramLine
     *
     * @var string
     */
    protected $publicTransportTramLine = '';

    /**
     * publicTransportTramStation
     *
     * @var string
     */
    protected $publicTransportTramStation = '';

    /**
     * publicTransportBusLine
     *
     * @var string
     */
    protected $publicTransportBusLine = '';

    /**
     * publicTransportBusStation
     *
     * @var string
     */
    protected $publicTransportBusStation = '';

    /**
     * rentBase
     *
     * @var float
     */
    protected $rentBase = 0.0;

    /**
     * rentAddition
     *
     * @var float
     */
    protected $rentAddition = 0.0;

    /**
     * will be populated automatically
     *
     * @var float
     */
    protected $rentTotal = 0.0;

    /**
     * rentDeposit
     *
     * @var float
     */
    protected $rentDeposit = 0.0;
    
    /**
     * countRooms
     *
     * @var int
     */
    protected $countRooms = 0;
    
     /**
     * rooms
     *
     * @var array
     * @cascade remove
     */
    public $rooms = [];

    /**
     * sqmRoom1
     *
     * @var float
     */
    protected $sqmRoom1 = 0.0;

    /**
     * sqmRoom2
     *
     * @var float
     */
    protected $sqmRoom2 = 0.0;

    /**
     * sqmRoom3
     *
     * @var float
     */
    protected $sqmRoom3 = 0.0;

    /**
     * sqmRoom4
     *
     * @var float
     */
    protected $sqmRoom4 = 0.0;

    /**
     * sqmRoom5
     *
     * @var float
     */
    protected $sqmRoom5 = 0.0;
    
    /**
     * sqmRoom6
     *
     * @var float
     */
    protected $sqmRoom6 = 0.0;
    
    /**
     * sqmRoom7
     *
     * @var float
     */
    protected $sqmRoom7 = 0.0;
    
    /**
     * sqmRoom8
     *
     * @var float
     */
    protected $sqmRoom8 = 0.0;
    
    /**
     * sqmRoom9
     *
     * @var float
     */
    protected $sqmRoom9 = 0.0;
    
    /**
     * sqmRoom10
     *
     * @var float
     */
    protected $sqmRoom10 = 0.0;
    
    /**
     * sqmRoom11
     *
     * @var float
     */
    protected $sqmRoom11 = 0.0;
    
    /**
     * sqmRoom12
     *
     * @var float
     */
    protected $sqmRoom12 = 0.0;
    
    /**
     * sqmRoom13
     *
     * @var float
     */
    protected $sqmRoom13 = 0.0;
    
    /**
     * sqmRoom14
     *
     * @var float
     */
    protected $sqmRoom14 = 0.0;
    
    /**
     * sqmRoom15
     *
     * @var float
     */
    protected $sqmRoom15 = 0.0;
    
    /**
     * sqmRoom16
     *
     * @var float
     */
    protected $sqmRoom16 = 0.0;
    
    /**
     * sqmRoom17
     *
     * @var float
     */
    protected $sqmRoom17 = 0.0;
    
    /**
     * sqmRoom18
     *
     * @var float
     */
    protected $sqmRoom18 = 0.0;
    
    /**
     * sqmRoom19
     *
     * @var float
     */
    protected $sqmRoom19 = 0.0;
    
    /**
     * sqmRoom20
     *
     * @var float
     */
    protected $sqmRoom20 = 0.0;
    
    /**
     * labelRoom1
     *
     * @var string
     */
    protected $labelRoom1 = '';
    
    /**
     * labelRoom2
     *
     * @var string
     */
    protected $labelRoom2 = '';
    
    /**
     * labelRoom3
     *
     * @var string
     */
    protected $labelRoom3 = '';
    
    /**
     * labelRoom4
     *
     * @var string
     */
    protected $labelRoom4 = '';
    
    /**
     * labelRoom5
     *
     * @var string
     */
    protected $labelRoom5 = '';
    
    /**
     * labelRoom6
     *
     * @var string
     */
    protected $labelRoom6 = '';
    
    /**
     * labelRoom7
     *
     * @var string
     */
    protected $labelRoom7 = '';
    
    /**
     * labelRoom8
     *
     * @var string
     */
    protected $labelRoom8 = '';
    
    /**
     * labelRoom9
     *
     * @var string
     */
    protected $labelRoom9 = '';
    
    /**
     * labelRoom10
     *
     * @var string
     */
    protected $labelRoom10 = '';
    
    /**
     * labelRoom11
     *
     * @var string
     */
    protected $labelRoom11 = '';
    
    /**
     * labelRoom12
     *
     * @var string
     */
    protected $labelRoom12 = '';
    
    /**
     * labelRoom13
     *
     * @var string
     */
    protected $labelRoom13 = '';
    
    /**
     * labelRoom14
     *
     * @var string
     */
    protected $labelRoom14 = '';
    
    /**
     * labelRoom15
     *
     * @var string
     */
    protected $labelRoom15 = '';
    
    /**
     * labelRoom16
     *
     * @var string
     */
    protected $labelRoom16 = '';
    
    /**
     * labelRoom17
     *
     * @var string
     */
    protected $labelRoom17 = '';
    
    /**
     * labelRoom18
     *
     * @var string
     */
    protected $labelRoom18 = '';
    
    /**
     * labelRoom19
     *
     * @var string
     */
    protected $labelRoom19 = '';
    
    /**
     * labelRoom20
     *
     * @var string
     */
    protected $labelRoom20 = '';

    /**
     * will be populated automatically
     *
     * @var float
     */
    protected $sqmTotal = 0.00;

    /**
     * description
     *
     * @var string
     */
    protected $description = '';

    /**
     * misc
     *
     * @var string
     */
    protected $misc = '';

    /**
     * __construct
     */
    public function __construct()
    {
        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
        //$this->labelRooms->add('dasd');
    }
    
    /**
     * Returns infos for one room
     *
     * @return array $room
     */
    public function getRoom($i = 0)
    {
	    $label = 'labelRoom'.$i;
	    $sqm = 'sqmRoom'.$i;
        return ['label' => $this->$label, 'sqm' => $this->$sqm];
    }

    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     *
     * @return void
     */
    protected function initStorageObjects()
    {
        $this->images = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Returns the name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the name
     *
     * @param string $name
     * @return void
     */
    public function setName($name)
    {
        $this->name = $name;
    }
    
    /**
     * Returns the navtitle
     *
     * @return string $navtitle
     */
    public function getNavTitle()
    {
        return $this->navtitle;
    }

    /**
     * Sets the navtitle
     *
     * @param string $navtitle
     * @return void
     */
    public function setNavTitle($navtitle)
    {
        $this->navtitle = $navtitle;
    }

    /**
     * Returns the street
     *
     * @return string $street
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Sets the street
     *
     * @param string $street
     * @return void
     */
    public function setStreet($street)
    {
        $this->street = $street;
    }

    /**
     * Returns the streetNumber
     *
     * @return string $streetNumber
     */
    public function getStreetNumber()
    {
        return $this->streetNumber;
    }

    /**
     * Sets the streetNumber
     *
     * @param string $streetNumber
     * @return void
     */
    public function setStreetNumber($streetNumber)
    {
        $this->streetNumber = $streetNumber;
    }

    /**
     * Returns the zip
     *
     * @return string $zip
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * Sets the zip
     *
     * @param string $zip
     * @return void
     */
    public function setZip($zip)
    {
        $this->zip = $zip;
    }

    /**
     * Returns the city
     *
     * @return string $city
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Sets the city
     *
     * @param string $city
     * @return void
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * Returns the lat
     *
     * @return float $lat
     */
    public function getLat()
    {
        return $this->lat;
    }

    /**
     * Sets the lat
     *
     * @param float $lat
     * @return void
     */
    public function setLat($lat)
    {
        $this->lat = $lat;
    }

    /**
     * Returns the lng
     *
     * @return float $lng
     */
    public function getLng()
    {
        return $this->lng;
    }

    /**
     * Sets the lng
     *
     * @param float $lng
     * @return void
     */
    public function setLng($lng)
    {
        $this->lng = $lng;
    }

    /**
     * Adds a FileReference
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
     * @return void
     */
    public function addImage(\TYPO3\CMS\Extbase\Domain\Model\FileReference $image)
    {
        $this->images->attach($image);
    }

    /**
     * Removes a FileReference
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $imageToRemove The FileReference to be removed
     * @return void
     */
    public function removeImage(\TYPO3\CMS\Extbase\Domain\Model\FileReference $imageToRemove)
    {
        $this->images->detach($imageToRemove);
    }

    /**
     * Returns the images
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference> $images
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * Sets the images
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference> $images
     * @return void
     */
    public function setImages(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $images)
    {
        $this->images = $images;
    }

    /**
     * Returns the publicTransportSuburbanLine
     *
     * @return string $publicTransportSuburbanLine
     */
    public function getPublicTransportSuburbanLine()
    {
        return $this->publicTransportSuburbanLine;
    }

    /**
     * Sets the publicTransportSuburbanLine
     *
     * @param string $publicTransportSuburbanLine
     * @return void
     */
    public function setPublicTransportSuburbanLine($publicTransportSuburbanLine)
    {
        $this->publicTransportSuburbanLine = $publicTransportSuburbanLine;
    }

    /**
     * Returns the publicTransportSuburbanStation
     *
     * @return string $publicTransportSuburbanStation
     */
    public function getPublicTransportSuburbanStation()
    {
        return $this->publicTransportSuburbanStation;
    }

    /**
     * Sets the publicTransportSuburbanStation
     *
     * @param string $publicTransportSuburbanStation
     * @return void
     */
    public function setPublicTransportSuburbanStation($publicTransportSuburbanStation)
    {
        $this->publicTransportSuburbanStation = $publicTransportSuburbanStation;
    }

    /**
     * Returns the publicTransportMetroLine
     *
     * @return string $publicTransportMetroLine
     */
    public function getPublicTransportMetroLine()
    {
        return $this->publicTransportMetroLine;
    }

    /**
     * Sets the publicTransportMetroLine
     *
     * @param string $publicTransportMetroLine
     * @return void
     */
    public function setPublicTransportMetroLine($publicTransportMetroLine)
    {
        $this->publicTransportMetroLine = $publicTransportMetroLine;
    }

    /**
     * Returns the publicTransportMetroStation
     *
     * @return string $publicTransportMetroStation
     */
    public function getPublicTransportMetroStation()
    {
        return $this->publicTransportMetroStation;
    }

    /**
     * Sets the publicTransportMetroStation
     *
     * @param string $publicTransportMetroStation
     * @return void
     */
    public function setPublicTransportMetroStation($publicTransportMetroStation)
    {
        $this->publicTransportMetroStation = $publicTransportMetroStation;
    }

    /**
     * Returns the publicTransportTramLine
     *
     * @return string $publicTransportTramLine
     */
    public function getPublicTransportTramLine()
    {
        return $this->publicTransportTramLine;
    }

    /**
     * Sets the publicTransportTramLine
     *
     * @param string $publicTransportTramLine
     * @return void
     */
    public function setPublicTransportTramLine($publicTransportTramLine)
    {
        $this->publicTransportTramLine = $publicTransportTramLine;
    }

    /**
     * Returns the publicTransportTramStation
     *
     * @return string $publicTransportTramStation
     */
    public function getPublicTransportTramStation()
    {
        return $this->publicTransportTramStation;
    }

    /**
     * Sets the publicTransportTramStation
     *
     * @param string $publicTransportTramStation
     * @return void
     */
    public function setPublicTransportTramStation($publicTransportTramStation)
    {
        $this->publicTransportTramStation = $publicTransportTramStation;
    }

    /**
     * Returns the publicTransportBusLine
     *
     * @return string $publicTransportBusLine
     */
    public function getPublicTransportBusLine()
    {
        return $this->publicTransportBusLine;
    }

    /**
     * Sets the publicTransportBusLine
     *
     * @param string $publicTransportBusLine
     * @return void
     */
    public function setPublicTransportBusLine($publicTransportBusLine)
    {
        $this->publicTransportBusLine = $publicTransportBusLine;
    }

    /**
     * Returns the publicTransportBusStation
     *
     * @return string $publicTransportBusStation
     */
    public function getPublicTransportBusStation()
    {
        return $this->publicTransportBusStation;
    }

    /**
     * Sets the publicTransportBusStation
     *
     * @param string $publicTransportBusStation
     * @return void
     */
    public function setPublicTransportBusStation($publicTransportBusStation)
    {
        $this->publicTransportBusStation = $publicTransportBusStation;
    }

    /**
     * Returns the rentBase
     *
     * @return float $rentBase
     */
    public function getRentBase()
    {
        return $this->rentBase;
    }

    /**
     * Sets the rentBase
     *
     * @param float $rentBase
     * @return void
     */
    public function setRentBase($rentBase)
    {
        $this->rentBase = $rentBase;
    }

    /**
     * Returns the rentAddition
     *
     * @return float $rentAddition
     */
    public function getRentAddition()
    {
        return $this->rentAddition;
    }

    /**
     * Sets the rentAddition
     *
     * @param float $rentAddition
     * @return void
     */
    public function setRentAddition($rentAddition)
    {
        $this->rentAddition = $rentAddition;
    }

    /**
     * Returns the rentTotal
     *
     * @return float $rentTotal
     */
    public function getRentTotal()
    {
        return $this->rentTotal;
    }

    /**
     * Sets the rentTotal
     *
     * @param float $rentTotal
     * @return void
     */
    public function setRentTotal($rentTotal)
    {
        $this->rentTotal = $rentTotal;
    }

    /**
     * Returns the rentDeposit
     *
     * @return float $rentDeposit
     */
    public function getRentDeposit()
    {
        return $this->rentDeposit;
    }

    /**
     * Sets the rentDeposit
     *
     * @param float $rentDeposit
     * @return void
     */
    public function setRentDeposit($rentDeposit)
    {
        $this->rentDeposit = $rentDeposit;
    }
    
    /**
     * Returns the countRooms
     *
     * @return float $countRooms
     */
    public function getCountRooms()
    {
        return $this->countRooms;
    }
    
    /**
     * Sets the countRooms
     *
     * @param float $countRooms
     * @return void
     */
    public function setCountRooms()
    {
        $this->countRooms = $countRooms;
    }
    
    /**
     * Returns the sqmRoom1
     *
     * @return float $sqmRoom1
     */
    public function getSqmRoom1()
    {
        return $this->sqmRoom1;
    }
    
    /**
     * Sets the sqmRoom1
     *
     * @param float $sqmRoom1
     * @return void
     */
    public function setSqmRoom1()
    {
        $this->sqmRoom1 = $sqmRoom1;
    }
    


    /**
     * Returns the sqmTotal
     *
     * @return float $sqmTotal
     */
    public function getSqmTotal()
    {
        return $this->sqmTotal;
    }

    /**
     * Sets the sqmTotal
     *
     * @param float $sqmTotal
     * @return void
     */
    public function setSqmTotal($sqmTotal)
    {
        $this->sqmTotal = $sqmTotal;
    }

    /**
     * Returns the description
     *
     * @return string $description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets the description
     *
     * @param string $description
     * @return void
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Returns the misc
     *
     * @return string $misc
     */
    public function getMisc()
    {
        return $this->misc;
    }

    /**
     * Sets the misc
     *
     * @param string $misc
     * @return void
     */
    public function setMisc($misc)
    {
        $this->misc = $misc;
    }
}
