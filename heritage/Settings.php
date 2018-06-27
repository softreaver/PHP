<?php

class Settings {
    private $email;
    private $mobile;

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail(string $email) : Settings
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Set the value of mobile
     *
     * @return  self
     */ 
    public function setMobile(string $mobile) : Settings
    {
        $this->mobile = $mobile;

        return $this;
    }
}
