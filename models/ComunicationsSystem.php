<?php
class ComunicationsSystem
{
    private $sender;
    private $receiver;
    private $title;
    private $content;
    public $delivered = false;
    public static $sound = 'DRIIN';

    //SENDER
    public function send()
    {
        $this->delivered = true;
    }
    public function setSender($sender)
    {
        $this->sender = $sender;
    }
    public function getSender()
    {
        return $this->sender;
    }

    //RECEIVER
    public function setReceiver($receiver)
    {
        $this->receiver = $receiver;
    }
    public function getReceiver()
    {
        return $this->receiver;
    }

    //TITLE
    public function setTitle($title)
    {
        $this->title = $title;
    }
    public function getTitle()
    {
        return $this->title;
    }

    //CONTENT
    public function setContent($content)
    {
        $this->content = $content;
    }
    public function getContent()
    {
        return $this->content;
    }

    public function sent()
    {
        return 'Invio effettuato';
    }
}
