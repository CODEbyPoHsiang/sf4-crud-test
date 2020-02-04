<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ArticleRepository")
 */
class Article
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text", length=100)
     */
    private $name;

    /**
     * @ORM\Column(type="text")
     */
    private $ename;

    /**
     * @ORM\Column(type="text")
     */
    private $phone;

    /**
     * @ORM\Column(type="text")
     */
    private $email;

    /**
     * @ORM\Column(type="text")
     */
    private $sex;

    /**
     * @ORM\Column(type="text")
     */
    private $city;

    /**
     * @ORM\Column(type="text")
     */
    private $township;

    /**
     * @ORM\Column(type="text")
     */
    private $postcode;

    /**
     * @ORM\Column(type="text")
     */
    private $address;

    /**
     * @ORM\Column(type="text")
     */
    private $notes;

    // Getters & Setters
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getEname()
    {
        return $this->ename;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getSex()
    {
        return $this->sex;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function getTownship()
    {
        return $this->township;
    }

    public function getPostcode()
    {
        return $this->postcode;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function getNotes()
    {
        return $this->notes;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setEname($ename)
    {
        $this->ename = $ename;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setSex($sex)
    {
        $this->sex = $sex;
    }

    public function setCity($city)
    {
        $this->city = $city;
    }

    public function setTownship($township)
    {
        $this->township = $township;
    }

    public function setPostcode($postcode)
    {
        $this->postcode = $postcode;
    }

    public function setAddress($address)
    {
        $this->address = $address;
    }

    public function setNotes($notes)
    {
        $this->notes = $notes;
    }
}
