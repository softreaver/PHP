<?php

trait Timestamp {
    protected $last_update;

    

    /**
     * Get the value of last_update
     */ 
    public function getLast_update()
    {
        return $this->last_update;
    }

    /**
     * Set the value of last_update
     *
     * @return  self
     */ 
    public function setLast_update($last_update)
    {
        $this->last_update = $last_update;

        return $this;
    }
}
