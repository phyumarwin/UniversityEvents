<?php

class EventSponsorModel
{
    // Access Modifier = public, private, protected
    private $id;
    private $event_id;
    private $name;
    private $contact_person;
    private $email;
    private $phone;
    private $address;
    private $website;
    private $sponsorship_amount;

    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }

    public function setEventId($event_id)
    {
        $this->event_id = $event_id;
    }
    public function getEventId()
    {
        return $this->event_id;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }

    public function setContactPerson($contact_person)
    {
        $this->contact_person = $contact_person;
    }
    public function getContactPerson()
    {
        return $this->contact_person;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function getEmail()
    {
        return $this->email;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;
    }
    public function getPhone()
    {
        return $this->phone;
    }

    public function setAddress($address)
    {
        $this->address = $address;
    }
    public function getAddress()
    {
        return $this->address;
    }

    public function setWebsite($website)
    {
        $this->website = $website;
    }
    public function getWebsite()
    {
        return $this->website;
    }

    public function setSponsorshipAmount($sponsorship_amount)
    {
        $this->sponsorship_amount = $sponsorship_amount;
    }
    public function getSponsorshipAmount()
    {
        return $this->sponsorship_amount;
    }
   
    public function toArray() {
        return [
            "id" => $this->getId(),
            "event_id" => $this->getEventId(),
            "name" => $this->getName(),
            "contact_person" => $this->getContactPerson(),
            "email" => $this->getEmail(),
            "phone" => $this->getPhone(),
            "address" => $this->getAddress(),
            "website" => $this->getWebsite(),
            "sponsorship_amount" => $this->getSponsorshipAmount(),
        ];
    }
}