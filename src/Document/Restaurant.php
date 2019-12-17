<?php

namespace App\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * Class Restaurant
 * Author : tao.ruiz@zohomail.eu
 * @MongoDB\Document
 */
class Restaurant
{
    /**
     * @MongoDB\Id()
     * @var string Restaurant's ID
     */
    protected $id;

    /**
     * @MongoDB\Field(type="string")
     * @var string Restaurant's name
     */
    protected $name;

    /**
     * @MongoDB\Field(type="string")
     * @var string Restaurant's address
     */
    protected $address;

    /**
     * @MongoDB\Field(type="string")
     * @var string Restaurant's city
     */
    protected $city;

    /**
     * @MongoDB\Field(type="string")
     * @var string Restaurant's zipcode
     */
    protected $zipCode;

    /**
     * @MongoDB\Field(type="string")
     * @var string Restaurant's phone number
     */
    protected $phone;

    /**
     * @MongoDB\EmbedOne(targetDocument="Coordinates::class")
     */
    protected $coordinates;

    /**
     * Get restaurant's name
     *
     * @return  string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set restaurant's name
     *
     * @param  string  $name  Restaurant's name
     *
     * @return  self
     */
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get restaurant's address
     *
     * @return  string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set restaurant's address
     *
     * @param  string  $address  Restaurant's address
     *
     * @return  self
     */
    public function setAddress(string $address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get restaurant's city
     *
     * @return  string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set restaurant's city
     *
     * @param  string  $city  Restaurant's city
     *
     * @return  self
     */
    public function setCity(string $city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get restaurant's zipcode
     *
     * @return  string
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }

    /**
     * Set restaurant's zipcode
     *
     * @param  string  $zipCode  Restaurant's zipcode
     *
     * @return  self
     */
    public function setZipCode(string $zipCode)
    {
        $this->zipCode = $zipCode;

        return $this;
    }

    /**
     * Get restaurant's phone number
     *
     * @return  string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set restaurant's phone number
     *
     * @param  string  $phone  Restaurant's phone number
     *
     * @return  self
     */
    public function setPhone(string $phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get restaurant's ID
     *
     * @return  string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Undocumented function
     *
     * @param float $latitude
     * @param float $longitude
     * @return Restaurant
     */
    public function setCoordinates($latitude, $longitude)
    {
        $this->coordinates = new Coordinates($latitude, $longitude);
        return $this;
    }

    public function getCoordinates()
    {
        return $this->coordinates;
    }
}
