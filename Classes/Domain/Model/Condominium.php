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
 * Condominium
 */
class Condominium extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * name
     *
     * @var string
     */
    protected $name = '';

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
     * description
     *
     * @var string
     */
    protected $description = '';

    /**
     * modernisation
     *
     * @var string
     */
    protected $modernisation = '';

    /**
     * contents
     *
     * @var string
     */
    protected $contents = '';

    /**
     * furnishings
     *
     * @var string
     */
    protected $furnishings = '';

    /**
     * contactPerson
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Azurgruen\AzgrStaff\Domain\Model\Member>
     */
    protected $contactPerson = null;

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
     * Returns the images
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $images
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * Sets the images
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $images
     * @return void
     */
    public function setImages(\TYPO3\CMS\Extbase\Domain\Model\FileReference $images)
    {
        $this->images = $images;
    }

    /**
     * __construct
     */
    public function __construct()
    {
        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
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
        $this->contactPerson = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
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
     * Adds a Member
     *
     * @param \Azurgruen\AzgrStaff\Domain\Model\Member $contactPerson
     * @return void
     */
    public function addContactPerson(\Azurgruen\AzgrStaff\Domain\Model\Member $contactPerson)
    {
        $this->contactPerson->attach($contactPerson);
    }

    /**
     * Removes a Member
     *
     * @param \Azurgruen\AzgrStaff\Domain\Model\Member $contactPersonToRemove The Member to be removed
     * @return void
     */
    public function removeContactPerson(\Azurgruen\AzgrStaff\Domain\Model\Member $contactPersonToRemove)
    {
        $this->contactPerson->detach($contactPersonToRemove);
    }

    /**
     * Returns the contactPerson
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Azurgruen\AzgrStaff\Domain\Model\Member> $contactPerson
     */
    public function getContactPerson()
    {
        return $this->contactPerson;
    }

    /**
     * Sets the contactPerson
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Azurgruen\AzgrStaff\Domain\Model\Member> $contactPerson
     * @return void
     */
    public function setContactPerson(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $contactPerson)
    {
        $this->contactPerson = $contactPerson;
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
     * Returns the modernisation
     *
     * @return string $modernisation
     */
    public function getModernisation()
    {
        return $this->modernisation;
    }

    /**
     * Sets the modernisation
     *
     * @param string $modernisation
     * @return void
     */
    public function setModernisation($modernisation)
    {
        $this->modernisation = $modernisation;
    }

    /**
     * Returns the contents
     *
     * @return string $contents
     */
    public function getContents()
    {
        return $this->contents;
    }

    /**
     * Sets the contents
     *
     * @param string $contents
     * @return void
     */
    public function setContents($contents)
    {
        $this->contents = $contents;
    }

    /**
     * Returns the furnishings
     *
     * @return string $furnishings
     */
    public function getFurnishings()
    {
        return $this->furnishings;
    }

    /**
     * Sets the furnishings
     *
     * @param string $furnishings
     * @return void
     */
    public function setFurnishings($furnishings)
    {
        $this->furnishings = $furnishings;
    }
}
