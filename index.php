<?php
require_once __DIR__ . '/models/Attached.php';
require_once __DIR__ . '/models/Emails.php';
require_once __DIR__ . '/models/ComunicationsSystem.php';
require_once __DIR__ . '/models/Sms.php';
require_once __DIR__ . '/models/PushNotifications.php';

//ISTANZE
//SMS
$sms1 = new Sms();
$sms1->setSender('Roberto');
$sms1->setReceiver('Michela');
$sms1->setTitle('Cortesie');
$sms1->setContent('Ciao, come stai?');
$sms2 = new Sms();
$sms2->setSender('Fabrizio');
$sms2->setReceiver('Paolo');
$sms2->setTitle('Spesa');
$sms2->setContent('Dovresti andare a comprare il latte');

var_dump($sms1);
var_dump($sms2);

//EMAILS
//$email1 = new Emails();
//$email1->setSender('');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 3</title>
</head>

<body>

</body>

</html>