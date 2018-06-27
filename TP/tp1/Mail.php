<?php

class Mail{

    private $sender;
    private $receiver;
    
    const MAX_QUEUE = 10;

    public function __construct($emailSender, $emailReceiver){
        $this->sender = $emailSender;
        $this->receiver = $emailReceiver;
    }

    public function send(){
        return ($this->checkMail($this->sender) && $this->checkMail($this->receiver)) ? "ok" : "nok";
    }

    private function checkMail($email){
        return true;
    }

}
