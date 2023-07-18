<?php
class ComunicationsSystem
{
    private $sender;
    private $receiver;
    private $title;
    

    public function __construct($name, $content)
    {
        $this->name = $name;
        $this->content = $content;
    }
}
