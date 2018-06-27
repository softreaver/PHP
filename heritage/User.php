<?php

class User {

    private $name;
    private $settings;

    public function __construct() {
        $this->settings = new Settings;
    }

    /**
     * Get the value of name
     */ 
    public function getName() : string
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName(string $name) : User
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of settings
     */ 
    public function getSettings() : Settings
    {
        return $this->settings;
    }
}
