<?php
class User {

    public function __construct($name)
    {
        $this->name = $name;

    }
    public function addAddress(User\Address $address)
    {
        $this->address[] = $address;
    }
    public function getAddresses()
    {
        return $this->address;
    }
    public function getName()
    {
        return $this->name;
    }
}

class Address
{
    public function __construct($country, $city, $street)
    {
        $this->country = $country;
        $this->city = $city;
        $this->street = $street;
        $this->address = null;
    }

    public function getCountry()
    {
        return $this->country;
    }
    public function getCity()
    {
        return $this->city;
    }
    public function getStreet()
    {
        return $this->street;
    }
    public function setCountry($country)
    {
        $this->country = $country;
    }
    public function setCity($city)
    {
        $this->city = $city;
    }
    public function setStreet($street)
    {
        $this->street = $street;
    }
}