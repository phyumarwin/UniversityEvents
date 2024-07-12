<?php

class EventSponsorModel
{
    // Access Modifier = public, private, protected
    private $id;
    private $name;
    private $contact;

    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }

    public function setContact($contact)
    {
        $this->contact = $contact;
    }
    public function getContact()
    {
        return $this->contact;
    }
   
    public function toArray() {
        return [
            "id" => $this->getId(),
            "name" => $this->getName(),
            "contact" => $this->getContact(),
        ];
    }
}