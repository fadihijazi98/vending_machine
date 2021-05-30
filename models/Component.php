<?php

namespace models;

abstract class Component
{
    private $id = null;

    public function setId()
    {
        if(!$this->id)
            $this->id = uniqid();
    }

    public function getId()
    {
        return $this->id;
    }
}