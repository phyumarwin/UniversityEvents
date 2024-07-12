<?php

class CategoryModel
{
    // Access Modifier = public, private, protected
    private $id;
    private $name;
    private $description;

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

    public function setDescription($description)
    {
        $this->description = $description;
    }
    public function getDescription()
    {
        return $this->description;
    }
   
    public function toArray() {
        return [
            "id" => $this->getId(),
            "name" => $this->getName(),
            "description" => $this->getDescription(),
        ];
    }
}