<?php
class PushNotifications extends ComunicationsSystem
{
    public $icon;
    public static $notifyColor = 'yellow';

    public function __construct($icon)
    {
        $this->icon = $icon;
    }
    public function sent()
    {
        return 'Notifica inviata';
    }
}
