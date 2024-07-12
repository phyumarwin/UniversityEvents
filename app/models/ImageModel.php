<?php

class ImageModel
{
    private $id;
    private $event_id;
    private $upload_url;

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

    public function setUploadUrl($upload_url)
    {
        $this->upload_url = $upload_url;
    }

    public function getUploadUrl()
    {
        return $this->upload_url;
    }

    public function toArray()
    {
        return [
            "id" => $this->getId(),
            "event_id" => $this->getEventId(),
            "upload_url" => $this->getUploadUrl(),
        ];
    }
}
?>
