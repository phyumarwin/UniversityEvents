<?php

class EventRegisterModel
{
    // Access Modifier = public, private, protected
    private $id;
    private $name;
    private $event_id;
    private $user_id;
    private $registration_date;

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

    public function setEventId($event_id)
    {
        $this->event_id = $event_id;
    }
    public function getEventId()
    {
        return $this->event_id;
    }
    
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
    }
    public function getUserId()
    {
        return $this->user_id;
    }

    public function setRegistrationDate($registration_date)
    {
        $this->registration_date = $registration_date;
    }
    public function getRegistrationDate()
    {
        return $this->registration_date;
    }
   
    public function toArray() {
        return [
            "id" => $this->getId(),
            "name" => $this->getName(),
            "event_id" => $this->getEventId(),
            "user_id" => $this->getUserId(),
            "registration_date" => $this->getRegistrationDate(),
        ];
    }
}