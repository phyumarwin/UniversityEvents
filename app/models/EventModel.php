<?php

class EventModel
{
    private $event_id;
    private $category_id;
    private $title;
    private $description;
    private $venue;
    private $start_time;
    private $end_time;
    private $date;

    public function setEventId($event_id)
    {
        $this->event_id = $event_id;
    }
    public function getEventId()
    {
        return $this->event_id;
    } 

    public function setCategoryId($category_id)
    {
        $this->category_id = $category_id;
    }
    public function getCategoryId()
    {
        return $this->category_id;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }
    public function getTitle()
    {
        return $this->title;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }
    public function getDescription()
    {
        return $this->description;
    }

    public function setVenue($venue)
    {
        $this->venue = $venue;
    }
    public function getVenue()
    {
        return $this->venue;
    }

    public function setStartTime($start_time)
    {
        $this->start_time = $start_time;
    }
    public function getStartTime()
    {
        return $this->start_time;
    }

    public function setEndTime($end_time)
    {
        $this->end_time = $end_time;
    }
    public function getEndTime()
    {
        return $this->end_time;
    }

    public function setDate($date)
    {
        $this->date = $date;
    }
    public function getDate()
    {
        return $this->date;
    }

    public function toArray() {
        return [
            "id" => $this->getEventId(),
            "category_id" => $this->getCategoryID(),
            "title" => $this->getTitle(),
            "description" => $this->getDescription(),
            "venue" => $this->getVenue(),
            "start_time" => $this->getStartTime(),
            "end_time" => $this->getEndTime(),
            "date" => $this->getDate(),
        ];
    }
}
