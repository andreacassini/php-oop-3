<?php
class Emails extends ComunicationsSystem
{
    public $attached;

    public function sent()
    {
        return 'Email inviata';
    }
    public function forward()
    {
        return 'Email inoltrata';
    }
    public function print()
    {
        return 'Email stampata';
    }
}
