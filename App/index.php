<?php
require_once('autoload.php');

use App\Alert;
use App\User;
use App\Message;


$user1= New User('James');
$new_message = 'hello, world';

$user2= New User('Burt');
$user1Name =$user1->getName();


echo "Adding observers to subject\n";
$newMessage = new Message($new_message2,$user1Name); 

$newMessage->attach($user2);  
echo "Now going to notify() them...\n";
$newMessage->notify();
echo "Done\n";