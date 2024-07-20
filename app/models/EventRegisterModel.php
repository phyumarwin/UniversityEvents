<?php

class EventRegisterModel
{
    // Access Modifier = public, private, protected
    private $id;
    private $event_id;
    private $user_id;
    private $roll_no;
    private $phone;
    private $status;

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
    
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
    }
    public function getUserId()
    {
        return $this->user_id;
    }

    public function setRollNo($roll_no)
    {
        $this->roll_no = $roll_no;
    }
    public function getRollNo()
    {
        return $this->roll_no;
    }
   
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }
    public function getPhone()
    {
        return $this->phone;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }
    public function getStatus()
    {
        return $this->status;
    }

    public function toArray() {
        return [
            "id" => $this->getId(),
            "event_id" => $this->getEventId(),
            "user_id" => $this->getUserId(),
            "roll_no" => $this->getRollNo(),
            "phone" => $this->getPhone(),
            "status" => $this->getStatus()
        ];
    }
}