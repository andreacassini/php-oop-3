<?php
class Sms extends ComunicationsSystem
{
    public $enableAnswer = false;
    public static $notifyColor = 'Blue';
    public function sent()
    {
        return 'Messaggio inviato';
    }
    public function response()
    {
        return 'ok';
    }
    public function enableAnswer()
    {
        $this->enableAnswer = true;    //answerEnabled non funziona come nominativo
    }
}
